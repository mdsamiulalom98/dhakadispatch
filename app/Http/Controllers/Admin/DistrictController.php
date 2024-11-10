<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;
use Toastr;
use Image;
use File;
use Str;
class DistrictController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:district-list|district-create|district-edit|district-delete', ['only' => ['index','store']]);
         $this->middleware('permission:district-create', ['only' => ['create','store']]);
         $this->middleware('permission:district-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:district-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $data = District::orderBy('id','DESC')->get();
        return view('backEnd.district.index',compact('data'));
    }
    public function create()
    {
        $categories = District::orderBy('id','DESC')->select('id','name')->get();
        return view('backEnd.district.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();
        District::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('districts.index');
    }
    
    public function edit($id)
    {
        $edit_data = District::find($id);
        return view('backEnd.district.edit',compact('edit_data'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $update_data = District::find($request->id);
        $input = $request->all();;
        $input['status'] = $request->status?1:0;
        
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('districts.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = District::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = District::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = District::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
