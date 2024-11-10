<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Whychooseus;
use Toastr;
class WhychooseusController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:whychoose-list|whychoose-create|whychoose-edit|whychoose-delete', ['only' => ['index', 'store']]);
        // $this->middleware('permission:whychoose-create', ['only' => ['create', 'store']]);
        // $this->middleware('permission:whychoose-edit', ['only' => ['edit', 'update']]);
        // $this->middleware('permission:whychoose-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        $show_data = Whychooseus::orderBy('id', 'DESC')->get();
        return view('backEnd.whychoose.index', compact('show_data'));
    }
    public function create()
    { 
        return view('backEnd.whychoose.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();
        Whychooseus::create($input);
        Toastr::success('Success', 'Data insert successfully');
        return redirect()->route('whychooseus.index');
    }

    public function edit($id)
    {
        $edit_data = Whychooseus::find($id);
        return view('backEnd.whychoose.edit', compact('edit_data'));
    }

    public function update(Request $request){
        $this->validate($request, [
            'status' => 'required',
        ]);
        $update_data = Whychooseus::find($request->id);
        $input = $request->all();
        $input['status'] = $request->status?1:0;
        $update_data->update($input);


        Toastr::success('Success', 'Data update successfully');
        return redirect()->route('whychooseus.index');
    }

    public function inactive(Request $request)
    {
        $inactive = Whychooseus::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success', 'Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Whychooseus::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success', 'Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = Whychooseus::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success', 'Data delete successfully');
        return redirect()->back();
    }
}
