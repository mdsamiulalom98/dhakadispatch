<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PickupType;
use Toastr;
class PickupTypeController extends Controller
{
    function __construct()
    {
         // $this->middleware('permission:pickup-type-list|pickup-type-create|pickup-type-edit|pickup-type-delete', ['only' => ['index','store']]);
         // $this->middleware('permission:pickup-type-create', ['only' => ['create','store']]);
         // $this->middleware('permission:pickup-type-edit', ['only' => ['edit','update']]);
         // $this->middleware('permission:pickup-type-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $data = PickupType::orderBy('id','DESC')->get();
        return view('backEnd.pickup.type.index',compact('data'));
    }
    public function create()
    {
        $categories = PickupType::orderBy('id','DESC')->select('id','name')->get();
        return view('backEnd.pickup.type.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
        ]);
        $input = $request->all();
        PickupType::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('pickup_types.index');
    }
    
    public function edit($id)
    {
        $edit_data = PickupType::find($id);
        return view('backEnd.pickup.type.edit',compact('edit_data'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $update_data = PickupType::find($request->id);
        $input = $request->all();
        $input['status'] = $request->status?1:0;
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('pickup_types.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = PickupType::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = PickupType::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = PickupType::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
