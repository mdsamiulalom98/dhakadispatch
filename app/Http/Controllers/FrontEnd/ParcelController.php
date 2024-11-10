<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Thana;
use App\Models\Merchant;
use App\Models\Pricing;
use App\Models\ParcelNote;
use App\Models\ParcelStatus;
use App\Models\Parcel;
use App\Models\Notification;
use App\Models\DeliveryCharge;
use App\Models\ServiceType;
use App\Models\MerchantMethod;
use App\Imports\ParcelImport;
use Excel;
use Toastr;
use Auth;
use Str;
use DB;

class ParcelController extends Controller
{    
    private function districts(){
        return District::select('id','name','status')->where('status',1)->orderBy('name','asc')->get();
    } 
    private function areas()
    {
        return Thana::where('status',1)->select('id', 'name', 'district_id')->orderBy('name', 'asc');
    }
    public function cost_calculate(Request $request){

        $pricing = DeliveryCharge::where(['service_id'=>$request->service_id,'zone_id'=>$request->zone_id])->first();
       
        if($request->weight > 1){
            $extra_charge = ($request->weight - 1)*20;
        }else{
            $extra_charge = 0;
        }
        $delivery_charge = $pricing->amount+$extra_charge;
        $cod_charge =  0;
        $cod_amount = $request->cod;
        return response()->json(['status'=>'success','delivery_charge'=>$delivery_charge,'cod_charge'=>$cod_charge,'cod_amount'=>$cod_amount]);
    }
    public function index($slug){
       $parclstatus = ParcelStatus::where('slug',$slug)->first();
       $parcels = Parcel::where(['merchant_id'=>Auth::guard('merchant')->user()->id])->select('id','name','phone','address','cod','delivery_charge','cod_charge','district_id','area_id','parcel_id','merchant_invoice','status','payment_status')->with('parcelstatus');
       if($slug == 'all'){
            $type = 'All';
        }else{
            $parcels = $parcels->where('status',$parclstatus->id);
            $type    = $parclstatus->name;
        }
        $parcels = $parcels->latest()->paginate(25);
        return view('frontEnd.layouts.merchant.parcel_manage', compact('parcels','type'));
       
    }
    public function create(){
          $merchantpay = MerchantMethod::where(['merchant_id'=> Auth::guard('merchant')->user()->id])->with('bankname')->first();
          if($merchantpay == NULL){
              Toastr::warning('message', 'Please update your profilt & payment information!');
              return redirect()->route('merchant.settings');
          }
        $districts  = $this->districts();
        $areas = $this->areas()->where(['district_id' => Auth::guard('merchant')->user()->district_id])->select('name', 'id')->get();
        $servicetypes = ServiceType::where('status',1)->get();
        return view('frontEnd.layouts.merchant.parcel_create',compact('districts','areas','servicetypes'));  
    }
    public function ajax_fraud(Request $request){
        $total_parcel = Parcel::where('phone',$request->phone)->count();
        $total_cancel = Parcel::where(['phone'=>$request->phone])->whereIn('status',['8','9','10'])->count();
        return response()->json(compact('total_parcel','total_cancel'));
    }
    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'service_id' => 'required',
            'zone_id' => 'required',
            'cod' => 'required|numeric',
            'weight' => 'required|numeric',

        ]);

        $pricing = DeliveryCharge::where(['service_id'=>$request->service_id,'zone_id'=>$request->zone_id])->first();
       
        if($request->weight > 1){
            $extra_charge = ($request->weight - 1)*20;
        }else{
            $extra_charge = 0;
        }
        $delivery_charge = $pricing->amount+$extra_charge;
        $cod_charge =  0;
        $cod_amount = $request->cod;
        $payable_amount = $request->cod - ($delivery_charge+$cod_charge);

    

        // return $request->all();
        $store_data = new Parcel();
        $store_data->merchant_id = Auth::guard('merchant')->user()->id;
        $store_data->parcel_id = $this->parcelIdGenerate();
        $store_data->service_id = $request->service_id;
        $store_data->zone_id = $request->zone_id;
        $store_data->name = $request->name;
        $store_data->phone = $request->phone;
        $store_data->address = $request->address;
        $store_data->district_id = $request->district?$request->district : null;
        $store_data->area_id = $request->area;
        $store_data->weight = $request->weight;
        $store_data->cod = $cod_amount;
        $store_data->cod_charge = $cod_charge;
        $store_data->delivery_charge = $delivery_charge;
        $store_data->payable_amount= $payable_amount;
        $store_data->merchant_invoice = $request->merchant_invoice;
        $store_data->note = $request->note;
        $store_data->payment_status = 'unpaid';
        $store_data->status = 1;
        $store_data->save();

        $note = new ParcelNote();
        $note->parcel_id = $store_data->id;
        $note->note = "Parcel added by Merchant(Website)";
        $note->save();

        Toastr::success('message', 'Your parcel create successfully!');
        return redirect()->route('merchant.parcel.index','all');
    }
    public function bulk_upload(){
        return view('frontEnd.layouts.merchant.parcel_bulk_upload');  
    }
    public function bulk_import(Request $request){
        Excel::import(new ParcelImport($request), $request->file('excel'));
         Toastr::success('message', 'Your parcel create successfully!');
        return redirect()->back(); 

    }
    public function view($id){
       $parcel = Parcel::where(['merchant_id'=>Auth::guard('merchant')->user()->id,'parcel_id'=>$id])->with('parcelstatus')->first();
       $unread_notification = Notification::where(['parcel_id'=>$parcel->id,'status'=>0])->update(['status'=>1]);
       $notes = ParcelNote::where('parcel_id',$parcel->id)->latest()->get();
        return view('frontEnd.layouts.merchant.parcel_view', compact('parcel','notes'));
       
    }

    public function edit($id)
    {
        $edit_data = Parcel::where(['parcel_id'=>$id,'merchant_id'=>Auth::guard('merchant')->user()->id])->first();
        $districts  = $this->districts();
        $areas = $this->areas()->where(['district_id' => $edit_data->district_id])->select('name', 'id')->get();
        $servicetypes = ServiceType::where('status',1)->get();

        $services = DeliveryCharge::where(['service_id' => $edit_data->service_id])->get();
        $zones = [];
        foreach($services as $service) {
            $zones[] = [
                'id' => $service->zone->id,
                'name' => $service->zone->name
            ];
        }
        return view('frontEnd.layouts.merchant.parcel_edit',compact('edit_data','districts','areas','servicetypes','zones'));

    }
    public function label_print($id)
    {
        $parcel = Parcel::where(['parcel_id'=>$id,'merchant_id'=>Auth::guard('merchant')->user()->id])->with('merchant')->first();
       $merchant = Merchant::where(['id'=>$parcel->merchant_id])->select('id','name','shop_id','image','shop_name')->first();
        return view('frontEnd.layouts.merchant.label_print',compact('parcel','merchant'));

    }
    public function update(Request $request){
        
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'service_id' => 'required',
            'zone_id' => 'required',
            'cod' => 'required|numeric',
            'weight' => 'required|numeric',

        ]);

        $pricing = DeliveryCharge::where(['service_id'=>$request->service_id,'zone_id'=>$request->zone_id])->first();
       
        if($request->weight > 1){
            $extra_charge = ($request->weight - 1)*20;
        }else{
            $extra_charge = 0;
        }
        $delivery_charge = $pricing->amount+$extra_charge;
        $cod_charge =  0;
        $cod_amount = $request->cod;
        $payable_amount = $request->cod - ($delivery_charge+$cod_charge);

        // return $request->all();
        $update_data =  Parcel::where(['merchant_id'=>Auth::guard('merchant')->user()->id,'parcel_id'=>$request->id])->first();
        $update_data->merchant_id = Auth::guard('merchant')->user()->id;
        $update_data->parcel_id = $this->parcelIdGenerate();
        $update_data->service_id = $request->service_id;
        $update_data->zone_id = $request->zone_id;
        $update_data->name = $request->name;
        $update_data->phone = $request->phone;
        $update_data->address = $request->address;
        $update_data->district_id =  $request->district?$request->district : null;
        $update_data->area_id =  $request->area?$request->area : null;
        $update_data->weight = $request->weight;
        $update_data->cod = $cod_amount;
        $update_data->cod_charge = $cod_charge;
        $update_data->delivery_charge = $delivery_charge;
        $update_data->payable_amount= $payable_amount;
        $update_data->merchant_invoice = $request->merchant_invoice;
        $update_data->note = $request->note;
        $update_data->payment_status = 'unpaid';
        $update_data->status = 1;
        $update_data->save();

        $note = new ParcelNote();
        $note->parcel_id = $update_data->id;
        $note->note = "Parcel edited by Merchant(Website)";
        $note->save();

        Toastr::success('message', 'Your parcel create successfully!');
        return redirect()->route('merchant.parcel.index','all');
    }
    public function destroy(Request $request){
        $parcel = Parcel::where(['id' => $request->id, 'merchant_id' => Auth::guard('merchant')->user()->id])->first();
        $parcel_notes = ParcelNote::where('parcel_id',$parcel->id)->get();
        foreach ($parcel_notes as $note) {
            $note->delete();
        }
        $parcel->delete();
        Toastr::success('message', 'Parcel delete successfully!');
        return redirect()->back();
    }
    
    function parcelIdGenerate(){
        do {
            $uniqueId = 'DD'.date('dmy').Str::upper(Str::random(6));
            $exists = Parcel::where('parcel_id', $uniqueId)->exists();
        }while ($exists);

        return $uniqueId;
    }

}
