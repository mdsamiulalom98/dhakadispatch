<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use App\Models\DeliveryZone;
use App\Models\Thana;
use Toastr;
class CityController extends Controller
{
   
    function __construct()
    {
        $this->middleware('permission:city-list|city-create|city-edit|city-delete', ['only' => ['index','store']]);
        $this->middleware('permission:city-create', ['only' => ['create','store']]);
        $this->middleware('permission:city-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:city-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $data = Thana::where('district_id',1)->orderBy('id','DESC')->get();
        return view('backEnd.thana.index',compact('data'));
    }
    public function create()
    {
        $districts = District::where('status',1)->get();
        $zones = DeliveryZone::select('id','name')->get();
        return view('backEnd.thana.create', compact('districts','zones'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'district_id' => 'required',
            'name' => 'required',
            'status' => 'required',
        ]);
        
        $input = $request->all();
        Thana::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('cities.index');
    }
    
    public function edit($id)
    {
        $edit_data = Thana::find($id);
        $districts = District::select('id','name')->get();
        $zones = DeliveryZone::select('id','name')->get();
         // return $edit_data;
        return view('backEnd.thana.edit',compact('edit_data','districts','zones'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'district_id' => 'required',
            'name' => 'required',
            'status' => 'required',
        ]);
        $update_data = Thana::find($request->id);
        $input = $request->all();
        $input['status'] = $request->status?1:0;
        $update_data->update($input);
        Toastr::success('Success','Data update successfully');
        return redirect()->route('cities.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = Thana::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Thana::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = Thana::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
