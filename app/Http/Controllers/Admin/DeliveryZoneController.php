<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DeliveryZone;
use Toastr;
class DeliveryZoneController extends Controller
{
    public function index(Request $request)
    {
        $data = DeliveryZone::orderBy('id','DESC')->get();
        return view('backEnd.deliveryzone.index',compact('data'));
    }
    public function create()
    {
        return view('backEnd.deliveryzone.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
        ]);
        $input = $request->all();
        $input['slug'] = strtolower(preg_replace('/\s+/u', '-', trim($request->name)));
        DeliveryZone::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('deliveryzone.index');
    }
    
    public function edit($id)
    {
        $edit_data = DeliveryZone::find($id);
        return view('backEnd.deliveryzone.edit',compact('edit_data'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $update_data = DeliveryZone::find($request->id);
        $input = $request->all();
        $input['status'] = $request->status?1:0;
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('deliveryzone.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = DeliveryZone::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = DeliveryZone::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = DeliveryZone::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}