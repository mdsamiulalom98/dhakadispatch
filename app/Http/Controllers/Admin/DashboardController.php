<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Merchant;
use App\Models\Parcel;
use App\Models\Expense;
use Carbon\Carbon;
use Session;
use Toastr;
use Auth;
use DB;
class DashboardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->except(['locked','unlocked']);
    }
    public function dashboard(){
        $total_delivered = DB::table('parcels')->select('status','cod')->where('status',7)->sum('cod');
        $total_paid = DB::table('parcels')->select('status','payment_status','payable_amount')->where(['payment_status'=>'paid'])->sum('payable_amount');
        $total_paid = DB::table('parcels')->select('status','payment_status','payable_amount')->where(['payment_status'=>'paid'])->sum('payable_amount');
        $total_hold = DB::table('parcels')->select('status','payment_status','payable_amount')->where(['status'=>7,'payment_status'=>'unpaid'])->sum('payable_amount');
        $total_expence = Expense::sum('amount');
        $monthly_sale = Parcel::select(DB::raw('DATE(created_at) as date','created_at'))->selectRaw("SUM(cod) as cod")->where(['status'=>7])->groupBy('date')->limit(30)->get();
        return view('backEnd.admin.dashboard',compact('total_delivered','total_paid','total_hold','total_expence','monthly_sale'));
    }
    public function changepassword(){
        return view('backEnd.admin.changepassword');
    }
     public function newpassword(Request $request)
    {
        $this->validate($request, [
            'old_password'=>'required',
            'new_password'=>'required',
            'confirm_password' => 'required_with:new_password|same:new_password|'
        ]);

        $user = User::find(Auth::id());
        $hashPass = $user->password;

        if (Hash::check($request->old_password, $hashPass)) {

            $user->fill([
                'password' => Hash::make($request->new_password)
            ])->save();

            Toastr::success('Success', 'Password changed successfully!');
            return redirect()->route('dashboard');
        }else{
            Toastr::error('Failed', 'Old password not match!');
            return back();
        }
    }
    public function locked(){
        // only if user is logged in
        
            Session::put('locked', true);
            return view('backEnd.auth.locked');
        

        return redirect()->route('login');
    }

    public function unlocked(Request $request)
    {
        if(!Auth::check())
            return redirect()->route('login');
        $password = $request->password;
        if(Hash::check($password,Auth::user()->password)){
            Session::forget('locked');
            Toastr::success('Success', 'You are logged in successfully!');
            return redirect()->route('dashboard');
        }
        Toastr::error('Failed', 'Your password not match!');
        return back();
    }
}
