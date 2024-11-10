<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Rider;
use App\Models\Payment;
use App\Models\PaymentDetails;
use App\Models\Parcel;
use App\Models\District;
use App\Models\Thana;
use App\Models\RiderMethod;
use Toastr;
use Image;
use File;
use Auth;
use Hash;
use Str;
class RiderManageController extends Controller
{
    public function create(){
        $districts = District::select('id','name','status')->where('status',1)->orderBy('name','asc')->get();
        return view('backEnd.rider.create',compact('districts'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|unique:riders',
            'email' => 'required|unique:riders',
            'password' => 'required'
        ]);
        $verify                     = rand(1111, 9999);
        $store_data                 = new Rider();
        $store_data->rider_id       = $this->generateRiderId();
        $store_data->name           = $request->name;
        $store_data->email          = $request->email;
        $store_data->phone          = $request->phone;
        $store_data->district_id    = $request->district;
        $store_data->area_id        = $request->area;
        $store_data->address        = $request->address;
        $store_data->verify         = 1;
        $store_data->agree          = 1;
        $store_data->status         = 1;
        $store_data->password       = bcrypt($request->password);
        $store_data->save();

        Toastr::success('Success','Rider added successfully');
        return redirect()->route('riders.index');
    }
    public function index(Request $request){
        if($request->keyword){
            $show_data = Rider::orWhere('phone',$request->keyword)->orWhere('name',$request->keyword)->latest()->paginate(50);
        }else{
            $show_data = Rider::latest()->paginate(50);
        }
        return view('backEnd.rider.index',compact('show_data'));
    }
    public function payment($slug,Request $request){
        $payments = Payment::where(['status'=>$slug,'user_type'=>'rider']);
        if($request->start_date && $request->end_date){
            $payments = $payments->whereBetween('created_at', [$request->start_date,$request->end_date]);
        }
        if($request->merchant_id){
            $payments = $payments->where('rider_id',$request->rider_id);
        }
        $payments = $payments->with('rider')->paginate(100);
        return view('backEnd.rider.payment',compact('payments'));
    }
    public function invoice($id){
        $payment = Payment::where(['id'=>$id,'user_type'=>'rider'])->first();
        return view('backEnd.rider.invoice',compact('payment'));
    }
    public function payment_status(Request $request){
        $this->validate($request, [
            'payment_status' => 'required',
            'admin_note' => 'required'
        ]);
        $payment                = Payment::where(['id'=>$request->id,'user_type'=>'rider'])->first();
        $payment->trx_id        = $request->trx_id;
        $payment->admin_note    = $request->admin_note;
        $payment->status        = $request->payment_status;
        $payment->save();
        Toastr::success('Success','Payment information update successfully');
        return back();
    }

    public function edit($id){
        $edit_data = Rider::find($id);
        $districts = District::where('status',1)->orderBy('name', 'asc')->get();
        $areas = Thana::where('status',1)->select('id', 'name', 'district_id')->where(['district_id' => $edit_data->district_id])->get();
        return view('backEnd.rider.edit',compact('edit_data','districts','areas'));
    }
    
    public function update(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $input = $request->except('hidden_id');
        $update_data = Rider::find($request->hidden_id);
        // new password
        
        
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
        $image = $request->file('image');
        if($image){
            // image with intervention 
            $name =  time().'-'.$image->getClientOriginalName();
            $name = preg_replace('"\.(jpg|jpeg|png|webp)$"', '.webp',$name);
            $name = strtolower(preg_replace('/\s+/', '-', $name));
            $uploadpath = 'public/uploads/customer/';
            $imageUrl = $uploadpath.$name; 
            $img=Image::make($image->getRealPath());
            $img->encode('webp', 90);
            $width = 100;
            $height = 100;
            $img->height() > $img->width() ? $width=null : $height=null;
            $img->resize($width, $height, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($imageUrl);
            $input['image'] = $imageUrl;
            File::delete($update_data->image);
        }else{
            $input['image'] = $update_data->image;
        }
        $input['status'] = $request->status?1:0;
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('riders.index');
    }
 
    public function inactive(Request $request){
        $inactive = Rider::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request){
        $active = Rider::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function profile(Request $request){
        $profile = Rider::find($request->id);
        $parcels = Parcel::where('merchant_id',$profile->id);
        $total_cod = $parcels->where('status',7)->sum('cod');
        $total_payment = $parcels->sum('payable_amount');
        $total_charge = $parcels->sum('cod_charge') + $parcels->sum('delivery_charge');
        $total_paid= (clone $parcels)->where('payment_status','paid')->sum('payable_amount');
        $total_hold= (clone $parcels)->whereIn('payment_status',['unpaid','process'])->sum('payable_amount');
        $parcels = $parcels->paginate(50);
        $payments = Payment::where(['user_id'=> $profile->id,'user_type'=>'merchant'])->withCount('paymentdetails')->paginate(50);
        return view('backEnd.rider.profile',compact('profile','total_cod','total_payment','total_charge','total_paid','total_hold','parcels','payments'));
    }
    public function menual_payment(Request $request){
        $parcels = Parcel::where(['rider_id'=> $request->id,'status'=>7,'rider_payment_status'=>'unpaid'])->select('id','name','phone','cod','delivery_charge','cod_charge','payable_amount','parcel_id','merchant_invoice','status','rider_payment_status','rider_commission')->paginate(50);
        $rider = Rider::select('id','name','default_method')->find($request->id);
        $riderpay = RiderMethod::where(['rider_id'=> $rider->id])->first();
        return view('backEnd.rider.menual_payment',compact('parcels','rider','riderpay'));
    }
    public function menual_payment_paid(Request $request){
        $parcels = Parcel::where(['rider_id'=> $request->rider_id,'status'=>7,'rider_payment_status'=>'unpaid'])->select('id','rider_id','status','payment_status','cod','rider_commission','delivery_charge','cod_charge')->get();
        $riderpay = RiderMethod::where(['rider_id'=> $request->rider_id])->with('bankname')->first();

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
        $payment->user_id           = $request->rider_id;
        $payment->user_type         = 'rider';
        $payment->cod               = $parcels->sum('cod');
        $payment->payable_amount    = $parcels->sum('rider_commission');
        $payment->delivery_charge   = $parcels->sum('delivery_charge');
        $payment->cod_charge        = $parcels->sum('cod_charge');
        $payment->payment_method    = $request->payment_method;
        $payment->user_note         = $user_note;
        $payment->status            = 'paid';
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

            $parcel->rider_payment_status = 'paid';
            $parcel->save();
        }
        
        Toastr::success('Rider payment has been place successfully', 'success!');
        return redirect()->route('riders.profile',['id'=>$request->rider_id]);
    }
    public function adminlog(Request $request){
        $customer = Rider::find($request->hidden_id);
        Auth::guard('rider')->loginUsingId($customer->id);
        return redirect()->route('rider.dashboard');
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