<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Parcel;
use App\Models\Payment;
use App\Models\ExpenseCategories;
use App\Models\Expense;
use DB;
class ReportsController extends Controller
{
    public function parcel(Request $request){
       $parcels = Parcel::select('id','name','phone','address','cod','delivery_charge','cod_charge','payable_amount','district_id','area_id','parcel_id','merchant_invoice','merchant_id','status','payment_status')->with('merchant');
        if($request->status == ''){
            $parcels = $parcels->with('parcelstatus');
        }else{
            $parcels = $parcels->where('status',$request->status)->with('parcelstatus');
        }
        if($request->parcel_id){
           $parcels = $parcels->where('parcel_id',$request->parcel_id); 
        }
        if($request->recipient){
           $parcels = $parcels->where('phone',$request->recipient); 
        }
        if($request->merchant){
           $parcels = $parcels->whereHas('merchant', function ($query) use ($request) {
                $query->where('phone', $request->merchant);
            }); 
        }
        if($request->start_date && $request->end_date){
           $parcels = $parcels->whereBetween('created_at', [$request->start_date, $request->end_date]);; 
        }
        $parcels = $parcels->latest()->paginate(50);
        return view('backend.reports.parcel', compact('parcels'));
       
    }
    public function payment(Request $request){
        if($request->status){
            $payments = Payment::latest()->where(['status'=>$request->status]);
        }else{
            $payments = Payment::latest();
        }
        if($request->start_date && $request->end_date){
            $payments = $payments->whereBetween('created_at', [$request->start_date,$request->end_date]);
        }
        $payments = $payments->paginate(100);
        return view('backEnd.reports.payment',compact('payments'));
    }
    public function expense(Request $request){
        if($request->category_id){
            $expenses = Expense::latest()->where(['category_id'=>$request->category_id]);
        }else{
            $expenses = Expense::latest();
        }
        if($request->start_date && $request->end_date){
            $expenses = $expenses->whereBetween('created_at', [$request->start_date,$request->end_date]);
        }
        $expenses = $expenses->paginate(100);
        $categories = ExpenseCategories::where('status', 1)->get();
        return view('backEnd.reports.expense',compact('expenses','categories'));
    }
    public function lossprofit(Request $request){
        if($request->start_date && $request->end_date){
            $total_delivered = DB::table('parcels')->select('status','cod')->where('status',7)->whereBetween('created_at', [$request->start_date,$request->end_date])->sum('cod');
            $total_paid = DB::table('parcels')->select('status','payment_status','payable_amount')->where(['payment_status'=>'paid'])->whereBetween('created_at', [$request->start_date,$request->end_date])->sum('payable_amount');
            $total_paid = DB::table('parcels')->select('status','payment_status','payable_amount')->where(['payment_status'=>'paid'])->whereBetween('created_at', [$request->start_date,$request->end_date])->sum('payable_amount');
            $total_hold = DB::table('parcels')->select('status','payment_status','payable_amount')->where(['status'=>7,'payment_status'=>'unpaid'])->whereBetween('created_at', [$request->start_date,$request->end_date])->sum('payable_amount');
             $rider_hold = DB::table('parcels')->select('status','payment_status','payable_amount')->where(['status'=>7,'rider_payment_status'=>'unpaid'])->whereBetween('created_at', [$request->start_date,$request->end_date])->sum('rider_commission');
            $total_expence = Expense::whereBetween('created_at', [$request->start_date,$request->end_date])->sum('amount');
            $parcels = DB::table('parcels')->where('status',7)->whereBetween('created_at', [$request->start_date,$request->end_date]);
            $total_income = $parcels->sum('cod_charge') + $parcels->sum('delivery_charge');

        }else{
            $total_delivered = DB::table('parcels')->select('status','cod')->where('status',7)->sum('cod');
            $total_paid = DB::table('parcels')->select('status','payment_status','payable_amount')->where(['payment_status'=>'paid'])->sum('payable_amount');
            $total_paid = DB::table('parcels')->select('status','payment_status','payable_amount')->where(['payment_status'=>'paid'])->sum('payable_amount');
            $total_hold = DB::table('parcels')->select('status','payment_status','payable_amount')->where(['status'=>7,'payment_status'=>'unpaid'])->sum('payable_amount');
            $rider_hold = DB::table('parcels')->select('status','payment_status','payable_amount')->where(['status'=>7,'rider_payment_status'=>'unpaid'])->sum('rider_commission');
            $total_expence = Expense::sum('amount');
      
            $parcels = DB::table('parcels')->where('status',7);
            $total_income = $parcels->sum('cod_charge') + $parcels->sum('delivery_charge');

        }
        
        return view('backEnd.reports.lossprofit',compact('total_delivered','total_paid','total_hold','rider_hold','total_expence','total_income'));
    }
}
