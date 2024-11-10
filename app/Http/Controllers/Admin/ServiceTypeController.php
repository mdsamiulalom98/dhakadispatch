<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceType;
use App\Models\DeliveryZone;
use Toastr;
class ServiceTypeController extends Controller
{
    public function index(Request $request)
    {
        $data = ServiceType::orderBy('id','DESC')->get();
        return view('backEnd.servicetype.index',compact('data'));
    }
    public function create()
    {
        $zones = DeliveryZone::orderBy('id','DESC')->get();
        return view('backEnd.servicetype.create',compact('zones'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
        ]);
        $input = $request->all();
        $input['slug'] = strtolower(preg_replace('/\s+/u', '-', trim($request->name)));
        $input['zone_ids'] = json_encode($request->zone_ids);
        ServiceType::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('parceltypes.index');
    }
    
    public function edit($id)
    {
        $edit_data = ServiceType::find($id);
        $zones = DeliveryZone::orderBy('id','DESC')->get();
        return view('backEnd.servicetype.edit',compact('edit_data','zones'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $update_data = ServiceType::find($request->id);
        $input = $request->all();
        $input['status'] = $request->status?1:0;
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('parceltypes.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = ServiceType::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = ServiceType::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = ServiceType::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
