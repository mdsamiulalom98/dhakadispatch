<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pricing;
use Toastr;
class PricingController extends Controller
{
    
    public function index(Request $request){
        $show_data = Pricing::orderBy('id','DESC')->get();
        return view('backEnd.pricing.index',compact('show_data'));
    }
    
    public function create()
    {
        return view('backEnd.pricing.create');
    }
    
    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'charge' => 'required',
            'status' => 'required',
        ]);
        $input = $request->all();
        $user = Pricing::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('pricing.index');
    }
    
    public function edit($id)
    {
        $edit_data = Pricing::find($id);
        return view('backEnd.pricing.edit',compact('edit_data'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'charge' => 'required',
        ]);
        
        $update_data = Pricing::find($request->id);
        $input['status'] = $request->status?1:0;
        $update_data->update($input);
        Toastr::success('Success','Data update successfully');
        return redirect()->route('pricing.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = Pricing::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Pricing::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {

        $delete_data = Pricing::find($request->hidden_id);
        File::delete($delete_data->image);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
