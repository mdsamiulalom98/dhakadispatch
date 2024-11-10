<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DeliveryZone;
use App\Models\ServiceType;
use App\Models\DeliveryCharge;
use Toastr;
class DeliveryChargeController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:city-list|city-create|city-edit|city-delete', ['only' => ['index','store']]);
        // $this->middleware('permission:city-create', ['only' => ['create','store']]);
        // $this->middleware('permission:city-edit', ['only' => ['edit','update']]);
        // $this->middleware('permission:city-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $data = DeliveryCharge::orderBy('id','DESC')->get();
        return view('backEnd.deliverycharge.index',compact('data'));
    }
    public function create()
    {
        $servicetypes = ServiceType::where('status',1)->get();
        $zones = DeliveryZone::where('status',1)->get();
        return view('backEnd.deliverycharge.create', compact('servicetypes','zones'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'service_id' => 'required',
            'zone_id' => 'required',
            'amount' => 'required',
            'status' => 'required',
        ]);
        
        $input = $request->all();
        DeliveryCharge::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('deliverycharge.index');
    }
    
    public function edit($id)
    {
        $edit_data = DeliveryCharge::find($id);
        $zones = DeliveryZone::select('id','name')->get();
        $servicetypes = ServiceType::where('status',1)->get();
        return view('backEnd.deliverycharge.edit',compact('edit_data','zones','servicetypes'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'service_id' => 'required',
            'zone_id' => 'required',
            'amount' => 'required',
            'status' => 'required',
        ]);
        $update_data = DeliveryCharge::find($request->id);
        $input = $request->all();
        $input['status'] = $request->status?1:0;
        
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('deliverycharge.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = DeliveryCharge::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = DeliveryCharge::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = DeliveryCharge::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
