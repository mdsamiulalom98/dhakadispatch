<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bank;
use Toastr;
class BankController extends Controller
{
    // function __construct()
    // {
    //      $this->middleware('permission:bank-list|bank-create|bank-edit|bank-delete', ['only' => ['index','store']]);
    //      $this->middleware('permission:bank-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:bank-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:bank-delete', ['only' => ['destroy']]);
    // }

    public function index(Request $request)
    {
        $data = Bank::orderBy('id','DESC')->get();
        return view('backEnd.bank.index',compact('data'));
    }
    public function create(){
       
        return view('backEnd.bank.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();
        Bank::create($input);
        Toastr::success('Success','Data insert successfully');
        return redirect()->route('banks.index');
    }
    
    public function edit($id)
    {
        $edit_data = Bank::find($id);
        return view('backEnd.bank.edit',compact('edit_data'));
    }
    
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $update_data = Bank::find($request->id);
        $input = $request->all();;
        $input['status'] = $request->status?1:0;
        
        $update_data->update($input);

        Toastr::success('Success','Data update successfully');
        return redirect()->route('banksindex');
    }
 
    public function inactive(Request $request)
    {
        $inactive = Bank::find($request->hidden_id);
        $inactive->status = 0;
        $inactive->save();
        Toastr::success('Success','Data inactive successfully');
        return redirect()->back();
    }
    public function active(Request $request)
    {
        $active = Bank::find($request->hidden_id);
        $active->status = 1;
        $active->save();
        Toastr::success('Success','Data active successfully');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $delete_data = Bank::find($request->hidden_id);
        $delete_data->delete();
        Toastr::success('Success','Data delete successfully');
        return redirect()->back();
    }
}
