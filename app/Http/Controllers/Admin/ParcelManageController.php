<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Thana;
use App\Models\Merchant;
use App\Models\Pricing;
use App\Models\ParcelNote;
use App\Models\Parcel;
use App\Models\Rider;
use App\Models\ParcelStatus;
use App\Models\Notification;
use Toastr;
class ParcelManageController extends Controller
{
    public function index($slug, Request $request){

       $parclstatus = ParcelStatus::where('slug',$slug)->first();
       $parcels = Parcel::select('id','name','phone','address','cod','delivery_charge','cod_charge','district_id','area_id','parcel_id','merchant_invoice','merchant_id','rider_id','status','payment_status')->with('merchant','rider');
        if($slug == 'all'){
            $parcels = $parcels->with('parcelstatus');
            $type = 'All';
        }else{
            $parcels = $parcels->where('status',$parclstatus->id)->with('parcelstatus');
            $type = $parclstatus->name;
        }
        if($request->parcel_id){
           $parcels = $parcels->where('parcel_id',$request->parcel_id); 
        }
        if($request->recipient){
           $parcels = $parcels->where('phone',$request->recipient); 
        }
        if($request->merchant){
           $parcels = $parcels->whereHas('merchant', function ($query) use ($request) {
                $query->where('phone', $request->merchant);
            }); 
        }
        if($request->start_date && $request->end_date){
           $parcels = $parcels->whereBetween('created_at', [$request->start_date, $request->end_date]);; 
        }

        $parcels = $parcels->latest()->paginate(50);

        
        $riders = Rider::select('id','name','phone')->where('status',1)->get();
        return view('backEnd.parcel.index', compact('parcels','type','riders'));
       
    }
    public function view($id){
       $parcel = Parcel::where(['parcel_id'=>$id])->with('parcelstatus')->first();
       $notes = ParcelNote::where('parcel_id',$parcel->id)->latest()->get();
        return view('backEnd.parcel.parcel_view', compact('parcel','notes'));
    }
    
    public function parcel_status(Request $request){
        foreach($request->input('parcel_ids') as $value){
            if($request->parcel_status){
                $parcel = Parcel::where('id', $value)->first();
                $parcel->status = $request->parcel_status;
                $parcel->save(); 

                if($parcel->rider_id){
                  $rider = Rider::find($parcel->rider_id);
                  if($rider->commission_type == 1){
                    $commision = $rider->commission;
                  }else{
                    $commision = ($rider->commission*$parcel->cod)/100;
                  }
                  $parcel->rider_commission = $commision;
                  $parcel->rider_payment_status = 'unpaid';
                  $parcel->save();
                }
            }
            if($request->parcel_status == 7){
                  $notification = new Notification();
                  $notification->title = "Your parcel #$parcel->parcel_id has been delivered.";
                  $notification->link       = "/parcel/view/$parcel->parcel_id";
                  $notification->user_id    = $parcel->merchant_id;
                  $notification->user_type  = 'merchant';
                  $notification->parcel_id  = $parcel->merchant_id;
                  $notification->status     = 0;
                  $notification->save();
            }

            $note = new ParcelNote();
            $note->parcel_id = $value;
            $note->note = $request->note;
            $note->save();

            
        }
        return response()->json(['status' => 'success', 'message' => 'Order status change successfully']);
    }
    public function rider_assign(Request $request)
    {
        $parcels = Parcel::whereIn('id', $request->input('parcel_ids'))->update(['rider_id' => $request->rider_id]);
        return response()->json(['status' => 'success', 'message' => 'Parcel rider id assign']);
    }
}
