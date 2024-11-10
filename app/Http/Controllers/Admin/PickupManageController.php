<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pickup;
use App\Models\Rider;
class PickupManageController extends Controller
{
    
    public function index($slug, Request $request){
       $pickups = Pickup::with('merchant','rider');
        if($slug){
            $pickups = $pickups->where('status',$slug);
        }
        if($request->pickup_id){
           $pickups = $pickups->where('pickup_id',$request->pickup_id); 
        }
        if($request->merchant){
           $pickups = $pickups->whereHas('merchant', function ($query) use ($request) {
                $query->where('phone', $request->merchant);
            }); 
        }
        if($request->start_date && $request->end_date){
           $pickups = $pickups->whereBetween('created_at', [$request->start_date, $request->end_date]);; 
        }
        $pickups = $pickups->latest()->paginate(50);
        $riders = Rider::select('id','name','phone')->where('status',1)->get();
        $type = $request->type;
        return view('backEnd.pickup.index', compact('pickups','type','riders'));
       
    }
    public function pickup_status(Request $request){
        foreach($request->input('pickup_ids') as $value){
            if($request->pickup_status){
                $parcel = Pickup::where('id', $value)->first();
                $parcel->status = $request->pickup_status;
                $parcel->save();
            }

        }
        return response()->json(['status' => 'success', 'message' => 'Pickup status change successfully']);
    }
    public function rider_assign(Request $request)
    {

        $parcels = Pickup::whereIn('id', $request->input('pickup_ids'))->update(['rider_id' => $request->rider_id,'status'=>'assigned']);
        return response()->json(['status' => 'success', 'message' => 'Pickup rider assign success']);
    }
}
