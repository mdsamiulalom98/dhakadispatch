<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PickupType;
use App\Models\Pickup;
use App\Models\Merchant;
use Toastr;
use Str;
use Auth;
class PickupController extends Controller
{
    public function create(){
      $types = PickupType::where('status',1)->get();
      $profile = Merchant::find(Auth::guard('merchant')->user()->id);
      return view('frontEnd.layouts.merchant.pickup_create',compact('types','profile')); 
    }
    public function index(){
       $pickups = Pickup::where(['merchant_id'=>Auth::guard('merchant')->user()->id])->latest()->paginate(25);
        return view('frontEnd.layouts.merchant.pickup_manage', compact('pickups'));
       
    }
    public function store(Request $request){
        $this->validate($request, [
            'type' => 'required|string',
            'estimedparcel' => 'required',
        ]);

        $store_data                 = new Pickup();
        $store_data->merchant_id    = Auth::guard('merchant')->user()->id;
        $store_data->pickup_id      = $this->pickupIdGenerate();
        $store_data->type           = $request->type;
        $store_data->estimedparcel  = $request->estimedparcel;
        $store_data->address        = Auth::guard('merchant')->user()->address;
        $store_data->district_id    = Auth::guard('merchant')->user()->district_id;
        $store_data->area_id        = Auth::guard('merchant')->user()->area_id;
        $store_data->note           = $request->note;
        $store_data->status         = 'pending';
        $store_data->save();

        Toastr::success('Success', 'Your pickup request create successfully!');
        return redirect()->route('merchant.pickup.index');
    }
    function pickupIdGenerate(){
        do {
            $uniqueId = 'DD'.date('dmy').Str::upper(Str::random(4));
            $exists = Pickup::where('merchant_id', $uniqueId)->exists();
        }while ($exists);

        return $uniqueId;
    }
}
