<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ParcelStatus;
use Toastr;
class ParcelStatusController extends Controller
{
    public function index(Request $request)
    {
        $data = ParcelStatus::orderBy('id','DESC')->get();
        return view('backEnd.parcelstatus.index',compact('data'));
    }
    public function create()
    {
        return view('backEnd.parcelstatus.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
        ]);
        $input = $request->all();
        $input['slug'] = strtolower(preg_replace('/\s+/u', '-', trim($request->name)));
        ParcelStatus::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('parcelstatus.index');
    }
    
    public function edit($id)
    {
        $edit_data = ParcelStatus::find($id);
        return view('backEnd.parcelstatus.edit',compact('edit_data'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $update_data = ParcelStatus::find($request->id);
        $input = $request->all();
        $input['status'] = $request->status?1:0;
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('parcelstatus.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = ParcelStatus::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = ParcelStatus::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = ParcelStatus::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}