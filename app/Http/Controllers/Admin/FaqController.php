<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use Toastr;
class FaqController extends Controller
{
    
    public function index(Request $request){
        $show_data = Faq::orderBy('id','DESC')->get();
        return view('backEnd.faq.index',compact('show_data'));
    }
    
    public function create(){
        return view('backEnd.faq.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();
        $user = Faq::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('faq.index');
    }
    
    public function edit($id){
        $edit_data = Faq::find($id);
        return view('backEnd.faq.edit',compact('edit_data'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $update_data = Faq::find($request->id);

        $input = $request->all();
        $input['status'] = $request->status?1:0;
        $update_data->update($input);
        Toastr::success('Success','Data update successfully');
        return redirect()->route('faq.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = Faq::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Faq::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {

        $delete_data = Faq::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
