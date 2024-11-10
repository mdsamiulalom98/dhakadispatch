<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;
use Toastr;
class NoticeController extends Controller
{
    
    public function index(Request $request){
        $show_data = Notice::orderBy('id','DESC')->get();
        return view('backEnd.notice.index',compact('show_data'));
    }
    
    public function create()
    {
        return view('backEnd.notice.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();
        $user = Notice::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('notice.index');
    }
    
    public function edit($id)
    {
        $edit_data = Notice::find($id);
        return view('backEnd.notice.edit',compact('edit_data'));
    }
    
    public function update(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $update_data = Notice::find($request->id);
        $input = $request->all();
        $input['status'] = $request->status?1:0;
        $update_data->update($input);
        Toastr::success('Success','Data update successfully');
        return redirect()->route('notice.index');
    }
 
    public function inactive(Request $request)
    {
        $inactive = Notice::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Notice::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {

        $delete_data = Notice::find($request->hidden_id);
        File::delete($delete_data->image);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
