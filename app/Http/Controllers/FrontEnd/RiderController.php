<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Rider;
use App\Models\GeneralSetting;
use App\Models\District;
use App\Models\Thana;
use App\Models\Bank;
use App\Models\RiderMethod;
use App\Models\Pricing;
use App\Models\Parcel;
use App\Models\Payment;
use App\Models\PaymentDetails;
use App\Models\Notice;
use App\Models\ParcelStatus;
use App\Models\ParcelNote;
use App\Models\Notification;
use Carbon\Carbon;
use Session;
use DB;
use Str;

class RiderController extends Controller
{
    private function setting()
    {
        return GeneralSetting::select('name')->first();
    }
    private function districts()
    {
        return District::where('status',1)->orderBy('name', 'asc')->get();
    }
    private function areas()
    {
        return Thana::where('status',1)->select('id', 'name', 'district_id')->orderBy('name', 'asc');
    }

    public function register()
    {
        return view('frontEnd.layouts.rider.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|unique:riders',
            'email' => 'required|unique:riders',
            'password' => 'required',
            'agree' => 'required',
            'confirmed' => 'required_with::password|same:password',
        ]);
        $verify                 = rand(1111, 9999);
        $store_data             = new Rider();
        $store_data->rider_id   = $this->generateRiderId();
        $store_data->name       = $request->name;
        $store_data->email      = $request->email;
        $store_data->phone      = $request->phone;
        $store_data->agree      = $request->agree;
        $store_data->status     = 0;
        $store_data->verify     = $verify;
        $store_data->password = bcrypt($request->password);
        $store_data->save();

        Session::put('verify_phone', $store_data->phone);
        // verify by sms
        $apiKey = 'mPHNEo5pvdzYOfj7cyLJczoNyrSMZB4g0DGuAzBExOo=';
        $clientId = '37574055-f638-4736-87af-c995ad7200ff';
        $senderId = '8809617611899';
        $message = "Dear $store_data->name, Your account verify OTP is $verify. Thanks for using " . $this->setting()->name;
        $mobileNumbers = "88$store_data->phone";
        $isUnicode = '0';
        $isFlash = '0';
        $message = urlencode($message);
        $mobileNumbers = urlencode($mobileNumbers);
        $url = "http://sms.insafhost.com/api/v2/SendSMS?ApiKey=$apiKey&ClientId=$clientId&SenderId=$senderId&Message=$message&MobileNumbers=$mobileNumbers&Is_Unicode=$isUnicode&Is_Flash=$isFlash";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        Toastr::success('Please check your phone for account verify token');
        return redirect()->route('rider.verify');
    }
    public function verify()
    {
        return view('frontEnd.layouts.rider.verify');
    }
    public function account_verify(Request $request)
    {
        $this->validate($request, [
            'otp' => 'required',
        ]);
        $auth_check = Rider::select('id', 'phone', 'verify')->where('phone', Session::get('verify_phone'))->first();
        if ($auth_check->verify == $request->otp) {
            $auth_check->verify = 1;
            $auth_check->status = 1;
            $auth_check->save();

            Auth::guard('rider')->loginUsingId($auth_check->id);
            Toastr::success('Your account verified successfully', 'Congratulations!');
            Session::forget('verify_phone');
            return redirect()->route('rider.dashboard');
        } else {
            Toastr::error('Your token does not match', 'Failed!');
            return redirect()->back();
        }
    }

    public function login()
    {
        return view('frontEnd.layouts.rider.login');
    }
    // login form
    public function signin(Request $request)
    {
        $this->validate($request, [
            'email_phone' => 'required',
            'password' => 'required',
        ]);
        $auth_check = Rider::select('phone','email', 'name', 'password', 'verify', 'status')->where('phone', $request->email_phone)->orWhere('email', $request->email_phone)->first();

        $email_phone = $request->email_phone;
        $credentials = [];
        if (filter_var($email_phone, FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $email_phone;
        } else {
            $credentials['phone'] = $email_phone;
        }
        $credentials['password'] = $request->password;

        if ($auth_check) {
            if ($auth_check->verify != 1) {
                $verify = rand(1111, 9999);
                $auth_check->verify = $verify;
                $auth_check->save();

                Session::put('verify_phone', $auth_check->phone);
                // verify by sms
                $apiKey = 'mPHNEo5pvdzYOfj7cyLJczoNyrSMZB4g0DGuAzBExOo=';
                $clientId = '37574055-f638-4736-87af-c995ad7200ff';
                $senderId = '8809617611899';
                $message = "Dear $auth_check->name, Your account verify OTP is $verify. Thanks for using " . $this->setting()->name;
                $mobileNumbers = "88$auth_check->phone";
                $isUnicode = '0';
                $isFlash = '0';
                $message = urlencode($message);
                $mobileNumbers = urlencode($mobileNumbers);
                $url = "http://sms.insafhost.com/api/v2/SendSMS?ApiKey=$apiKey&ClientId=$clientId&SenderId=$senderId&Message=$message&MobileNumbers=$mobileNumbers&Is_Unicode=$isUnicode&Is_Flash=$isFlash";
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);
                Toastr::error('Your account not verified, check your phone for OTP', 'Failed');
                return redirect()->route('rider.verify');
            } elseif ($auth_check->status == 0) {
                Toastr::error('Your account not active now', 'Failed');
                return redirect()->back();
            } else {
                if (Auth::guard('rider')->attempt($credentials)) {
                    Toastr::success('You are login successfully', 'Success');
                    return redirect()->route('rider.dashboard');
                } else {
                    Toastr::error('Your password does not match', 'Failed');
                    return redirect()->back();
                }
            }
        } else {
            Toastr::error('message', 'Sorry! You have no account');
            return redirect()->back();
        }
    }
    public function dashboard(Request $request){

        if ($request->start_date && $request->end_date) {
            $total_order = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->whereBetween('created_at', [$request->start_date,$request->end_date])->count();
            $total_delivery = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->where('status','7')->whereBetween('created_at', [$request->start_date,$request->end_date])->count();
            $total_process = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->whereNotIn('status',['1','8','9','10'])->whereBetween('created_at', [$request->start_date,$request->end_date])->count();
            $total_return = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->where('status','9')->whereBetween('created_at', [$request->start_date,$request->end_date])->count();
            $total_amount = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->whereBetween('created_at', [$request->start_date,$request->end_date])->sum('cod');
            $delivery_amount = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->where('status','7')->whereBetween('created_at', [$request->start_date,$request->end_date])->sum('cod');  
            $process_amount = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->whereNotIn('status',['1','7','8','9','10'])->whereBetween('created_at', [$request->start_date,$request->end_date])->sum('cod');
            $return_amount = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->where('status','9')->whereBetween('created_at', [$request->start_date,$request->end_date])->sum('cod');
        }else{
            $total_order = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->count();
            $total_delivery = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->where('status','7')->count();
            $total_process = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->whereNotIn('status',['1','7','8','9','10'])->count();
            $total_return = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->where('status','9')->count();
            $total_complete = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->where('status','7')->count();
            $total_amount = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->sum('cod');
            $delivery_amount = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->where('status','7')->sum('cod');  
            $process_amount = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->whereNotIn('status',['1','7','8','9','10'])->sum('cod');
            $return_amount = Parcel::where('rider_id', Auth::guard('rider')->user()->id)->where('status','9')->sum('cod');
        }
        return view('frontEnd.layouts.rider.dashboard',compact('total_order','total_delivery','total_process','total_return','total_complete','total_amount','delivery_amount','process_amount','return_amount'));
    }
    public function profile()
    {
        $profile = Rider::find(Auth::guard('rider')->user()->id);
        $districts = $this->districts();
        $areas = $this->areas()->where(['district_id' => $profile->district_id])->select('name', 'id')->get();
        return view('frontEnd.layouts.rider.profile', compact('profile','districts','areas'));
    }
    public function settings(){
        $profile = Rider::find(Auth::guard('rider')->user()->id);
        $banks = Bank::where('status',1)->get();
        $method = RiderMethod::where('rider_id',Auth::guard('rider')->user()->id)->first();
        $districts = $this->districts();
        $areas = $this->areas()->where(['district_id' => $profile->district_id])->select('name', 'id')->get();
        return view('frontEnd.layouts.rider.settings', compact('profile','districts','areas','banks','method'));
    }
    public function basic_update(Request $request)
    {
        $update_data = Rider::find(Auth::guard('rider')->user()->id);
        $update_image = $request->file('image');
        if ($update_image) {
            $file = $request->file('image');
            $name = time() . '-' . $file->getClientOriginalName();
            $uploadPath = 'public/uploads/merchant/';
            $file->move($uploadPath, $name);
            $fileUrl = $uploadPath . $name;
        } else {
            $fileUrl = $update_data->image;
        }
        $update_data->district_id    = $request->district??$update_data->district_id;
        $update_data->area_id        = $request->area??$update_data->area_id;
        $update_data->address        = $request->address??$update_data->address;
        $update_data->default_method = $request->default_method??$update_data->default_method;
        $update_data->payment_type   = $request->payment_type??$update_data->payment_type;
        $update_data->image          = $fileUrl;
        $update_data->save();
        Toastr::success('Basic info update successfully', 'Success');
        return redirect()->back();
    }
    public function payment_method(Request $request)
    {
        $update_data = RiderMethod::where('rider_id',Auth::guard('rider')->user()->id)->first();
        if($update_data){
            $update_data->bank_id       = $request->bank_id??$update_data->bank_id;
            $update_data->branch        = $request->branch??$update_data->branch;
            $update_data->routing       = $request->routing??$update_data->routing;
            $update_data->account_name  = $request->account_name??$update_data->account_name;
            $update_data->account_number= $request->account_number??$update_data->account_number;
            $update_data->bkash         = $request->bkash??$update_data->bkash;
            $update_data->nagad         = $request->nagad??$update_data->nagad;
            $update_data->rocket        = $request->rocket??$update_data->rocket;
            $update_data->save();
        }else{
            $data_store                = new RiderMethod();
            $data_store->rider_id   = Auth::guard('rider')->user()->id;
            $data_store->bank_id       = $request->bank_id;
            $data_store->branch        = $request->branch;
            $data_store->routing       = $request->routing;
            $data_store->account_name  = $request->account_name;
            $data_store->account_number= $request->account_number;
            $data_store->bkash         = $request->bkash;
            $data_store->nagad         = $request->nagad;
            $data_store->rocket        = $request->rocket;
            $data_store->save();
        }
        
        Toastr::success('Basic info update successfully', 'Success');
        return redirect()->back();
    }
    public function change_pass()
    {
        return view('frontEnd.layouts.rider.change_password');
    }

    public function password_update(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required_with:new_password|same:new_password|'
        ]);
        $auth_user = Rider::find(Auth::guard('rider')->user()->id);
        $hashPass = $auth_user->password;
        if (Hash::check($request->old_password, $hashPass)) {
            $auth_user->fill([
                'password' => Hash::make($request->new_password)
            ])->save();
            Toastr::success('Password changed successfully!', 'Success');
            return redirect()->route('rider.dashboard');
        } else {
            Toastr::error('Old password not match!', 'Failed');
            return redirect()->back();
        }
    }

    public function messages()
    {
        $messages = MerchantMessage::with('district', 'thana')->where('rider_id', Auth::guard('rider')->user()->id)->get();
        return view('frontEnd.layouts.rider.message', compact('messages'));
    }
    public function forgot_password()
    {
        return view('frontEnd.layouts.rider.forgot_password');
    }

    public function forgot_verify(Request $request) {
        $auth_info = Rider::where('phone', $request->phone)->first();
        if (!$auth_info) {
            Toastr::error('Your phone number not found', 'Failed');
            return back();
        }
        $auth_info->forgot = rand(1111, 9999);
        $auth_info->save();

        $apiKey = 'mPHNEo5pvdzYOfj7cyLJczoNyrSMZB4g0DGuAzBExOo=';
        $clientId = '37574055-f638-4736-87af-c995ad7200ff';
        $senderId = '8809617611899';
        $message = "Dear $auth_info->name, Your account forgot OTP is $auth_info->forgot. Thanks for using " . $this->setting()->name;
        $mobileNumbers = "88$auth_info->phone";
        $isUnicode = '0';
        $isFlash = '0';
        $message = urlencode($message);
        $mobileNumbers = urlencode($mobileNumbers);
        $url = "http://sms.insafhost.com/api/v2/SendSMS?ApiKey=$apiKey&ClientId=$clientId&SenderId=$senderId&Message=$message&MobileNumbers=$mobileNumbers&Is_Unicode=$isUnicode&Is_Flash=$isFlash";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        session::put('verify_phone', $request->phone);
        Toastr::success('Verify OTP send your phone number', 'Success');
        return redirect()->route('rider.forgot.reset');
    }

    public function forgot_reset(){
        if (!Session::get('verify_phone')) {
            Toastr::error('Something wrong please try again', 'Failed');
            return redirect()->route('rider.forgot.password');
        }
        return view('frontEnd.layouts.rider.forgot_reset');
    }
    public function forgot_store(Request $request){

        $auth_info = Rider::where('phone', session::get('verify_phone'))->first();
        if ($auth_info->forgot != $request->otp) {
            Toastr::error('Failed', 'Your OTP not match');
            return redirect()->back();
        }
        $auth_info->forgot = 1;
        $auth_info->password = bcrypt($request->password);
        $auth_info->save();
        if (Auth::guard('rider')->attempt(['phone' => $auth_info->phone, 'password' => $request->password])) {
            Session::forget('verify_phone');
            Toastr::success('You are login successfully', 'success!');
            return redirect()->route('rider.dashboard');
        }
    }

    public function rider_payment(Request $request){
        $riderpay = RiderMethod::where(['rider_id'=> Auth::guard('rider')->user()->id])->first();
        // return $riderpay;
        $paycod = Parcel::where(['rider_id'=> Auth::guard('rider')->user()->id,'status'=>7,'rider_payment_status'=>'unpaid'])->sum('cod'); 
        $delivery_charge = Parcel::where(['rider_id'=> Auth::guard('rider')->user()->id,'status'=>7,'rider_payment_status'=>'unpaid'])->sum('delivery_charge'); 
        $cod_charge = Parcel::where(['rider_id'=> Auth::guard('rider')->user()->id,'status'=>7,'rider_payment_status'=>'unpaid'])->sum('cod_charge'); 
        $total_commission = Parcel::where(['rider_id'=> Auth::guard('rider')->user()->id,'status'=>7,'rider_payment_status'=>'unpaid'])->sum('rider_commission');
        $payments = Payment::where(['user_id'=> Auth::guard('rider')->user()->id,'user_type'=>'rider']);
            switch ($request->filter) {
                case 'today':
                    $payments = $payments->whereDate('created_at', Carbon::today());
                    break;
                case 'week':
                    $payments = $payments->whereBetween('created_at', [Carbon::now()->subDays(7), Carbon::now()]);
                    break;
                case 'month':
                    $payments = $payments->whereMonth('created_at', Carbon::now()->month);
                    break;
                case 'last-month':
                    $payments = $payments->whereMonth('created_at', Carbon::now()->subMonth()->month);
                    break;
                case 'year':
                    $payments = $payments->whereYear('created_at', Carbon::now()->year);
                    break;
                case 'last-year':
                    $payments = $payments->whereYear('created_at', Carbon::now()->subYear()->year);
                    break;
                default:
                    break;
            }
        $payments = $payments->paginate(30);

        return view('frontEnd.layouts.rider.payment',compact('paycod','delivery_charge','cod_charge','total_commission','riderpay','payments'));
    }
    public function payable_parcel(){
        $parcels = Parcel::where(['rider_id'=> Auth::guard('rider')->user()->id,'status'=>7,'rider_payment_status'=>'unpaid'])->select('id','name','phone','address','cod','delivery_charge','cod_charge','payable_amount','district_id','area_id','parcel_id','merchant_invoice','status','payment_status','rider_commission')->get();
        return view('frontEnd.layouts.rider.payable',compact('parcels'));
    }
    public function payment_request(Request $request){
        $parcels = Parcel::where(['rider_id'=> Auth::guard('rider')->user()->id,'status'=>7,'rider_payment_status'=>'unpaid'])->select('id','rider_id','status','payment_status','cod','rider_commission','delivery_charge','cod_charge')->get();
        $riderpay = RiderMethod::where(['rider_id'=> Auth::guard('rider')->user()->id])->with('bankname')->first();

        if($parcels->sum('rider_commission') == 0){
            Toastr::error('You have no payable amount', 'failed!');
            return redirect()->back();
        }

        if($request->payment_method == 'bank'){
            $user_note = 'Bank Name: ' . ($riderpay->bankname ? $riderpay->bankname->name : '') . ', Account Name: ' . $riderpay->account_name . ', Account Number: ' . $riderpay->account_number . ', Routing: ' . $riderpay->routing;
        }elseif($request->payment_method == 'bkash'){
            $user_note = 'Receive Number: '. $riderpay->bkash;
        }elseif($request->payment_method == 'nagad'){
            $user_note = 'Receive Number: '. $riderpay->nagad;
        }elseif($request->payment_method == 'rocket'){
            $user_note = 'Receive Number: '. $riderpay->rocket;
        }
        $payment                    = new Payment();
        $payment->invoice_id        = $this->invoiceIdGenerate();
        $payment->user_id           = Auth::guard('rider')->user()->id;
        $payment->user_type         = 'rider';
        $payment->cod               = $parcels->sum('cod');
        $payment->payable_amount    = $parcels->sum('rider_commission');
        $payment->delivery_charge   = $parcels->sum('delivery_charge');
        $payment->cod_charge        = $parcels->sum('cod_charge');
        $payment->payment_method    = $request->payment_method;
        $payment->user_note         = $user_note;
        $payment->status            = 'process';
        $payment->save();

        foreach($parcels as $parcel){
            $payment_details                    = new PaymentDetails();
            $payment_details->payment_id        = $payment->id;
            $payment_details->parcel_id         = $parcel->id;
            $payment_details->cod               = $parcel->cod;
            $payment_details->delivery_charge   = $parcel->delivery_charge;
            $payment_details->cod_charge        = $parcel->cod_charge;
            $payment_details->payable_amount    = $parcel->rider_commission;
            $payment_details->save();

            $parcel->rider_payment_status = 'process';
            $parcel->save();
        }
        
        Toastr::success('Your payment request has been place successfully', 'success!');
        return redirect()->back();
    }

    public function payment_invoice($invoice_id){
        $payment = Payment::where(['user_id'=> Auth::guard('rider')->user()->id,'user_type'=>'rider','invoice_id'=>$invoice_id])->with('paymentdetails.parcel','rider')->first();
        // return $invoice;
        return view('frontEnd.layouts.rider.invoice',compact('payment'));
    }

    public function fraud_checker(Request $request){
        $total_parcel = Parcel::where('phone',$request->phone)->count();
        $total_cancel = Parcel::where(['phone'=>$request->phone])->whereIn('status',['8','9','10'])->count();
        return view('frontEnd.layouts.rider.fraud_checker',compact('total_parcel','total_cancel'));
    }
    public function notice(Request $request){
        $notices = Notice::latest()->get();
        $merchant = Rider::select('id','read_notices')->find(Auth::guard('rider')->user()->id);
        $merchant->read_notices = json_encode($notices->pluck('id')->toArray());
        $merchant->save();
        return view('frontEnd.layouts.rider.notice',compact('notices'));
    }
    public function notification(Request $request){
        $notifies = Notification::latest()->where(['user_id'=>Auth::guard('rider')->user()->id,'user_type'=>'merchant'])->paginate(30);
        return view('frontEnd.layouts.rider.notification',compact('notifies'));
    }
    public function pricing(Request $request){
        $areas = DB::table('thanas')->select('id','name','status')->where('status',1)->get();
        return view('frontEnd.layouts.rider.pricing',compact('areas'));
    }

    public function consignment_search(Request $request)
    {
        $keyword = $request->keyword;
        $parcels = Parcel::select('id', 'rider_id','name', 'phone', 'parcel_id')->where('rider_id',Auth::guard('rider')->user()->id);
        if ($request->keyword) {
            $parcels = $parcels->where('parcel_id', 'LIKE', '%' . $request->keyword . "%")->orWhere('phone', 'LIKE', '%' . $request->keyword . "%");
        }
        $parcels = $parcels->get();
        if (empty($request->keyword)) {
            $parcels = [];
        }
        return view('frontEnd.layouts.rider.search', compact('parcels'));
    }
    public function cost_calculate(Request $request){
        $merchant = Merchant::find(Auth::guard('rider')->user()->id);
        $area = Thana::find($request->area);
        if($merchant->area_id == $area->id){
            $pricing = Pricing::find(1);
        }elseif($merchant->district_id == $area->district_id){
            $pricing = Pricing::find(2);
        }else{
            $pricing = Pricing::find(3);
        }

        if($request->weight > 1){
            $extra_charge = ($request->weight - 1)*$pricing->extra_charge;
        }else{
            $extra_charge = 0;
        }
        $delivery_charge = $pricing->charge+$extra_charge;
        $cod_charge = ($request->cod*$pricing->cod)/100;
        $cod_amount = $request->cod;
        return response()->json(['status'=>'success','delivery_charge'=>$delivery_charge,'cod_charge'=>$cod_charge,'cod_amount'=>$cod_amount]);
    }
    public function index($slug){

       $parclstatus = ParcelStatus::where('slug',$slug)->first();
       $parcels = Parcel::where(['rider_id'=>Auth::guard('rider')->user()->id])->select('id','name','phone','address','cod','delivery_charge','cod_charge','district_id','area_id','parcel_id','merchant_invoice','status','payment_status')->with('parcelstatus');
       if($slug == 'all'){
            $type = 'All';
        }else{
            $parcels = $parcels->where('status',$parclstatus->id);
            $type = $parclstatus->name;
        }
        $parcels = $parcels->latest()->paginate(25);
        return view('frontEnd.layouts.rider.parcel_manage', compact('parcels','type'));
       
    }
    public function view($id){
       $parcel = Parcel::where(['rider_id'=>Auth::guard('rider')->user()->id,'parcel_id'=>$id])->with('parcelstatus')->first();
       $unread_notification = Notification::where(['parcel_id'=>$parcel->id,'status'=>0])->update(['status'=>1]);
       $notes = ParcelNote::where('parcel_id',$parcel->id)->latest()->get();
        return view('frontEnd.layouts.rider.parcel_view', compact('parcel','notes'));
       
    }
    public function label_print($id)
    {
        $parcel = Parcel::where(['parcel_id'=>$id,'rider_id'=>Auth::guard('rider')->user()->id])->with('merchant')->first();
       $merchant = Merchant::where(['id'=>$parcel->rider_id])->select('id','name','shop_id','image','shop_name')->first();
        return view('frontEnd.layouts.rider.label_print',compact('parcel','merchant'));

    }

    public function logout()
    {
        Session::flush();
        Toastr::success('You are logout successfully', 'Logout!');
        return redirect('/');
    }
    public function generateRiderId(){
        $lastMember = Rider::orderBy('id', 'desc')->first();
        if ($lastMember) {
            $lastId = (int) substr($lastMember->id, -5);
            $newId = $lastId + 1;
        } else {
            $newId = 1;
        }
        return '10000' . str_pad($newId, 1, '0', STR_PAD_LEFT);
    }
    function invoiceIdGenerate(){
        do {
            $uniqueId = 'INV-'.date('dmy').Str::upper(Str::random(6));
            $exists = Payment::where('invoice_id', $uniqueId)->exists();
        }while ($exists);

        return $uniqueId;
    }
}
