<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    
    public function paymentdetails(){
        return $this->hasMany('App\Models\PaymentDetails','payment_id');
    }
    public function merchant(){
        return $this->belongsTo(Merchant::class, 'user_id')->select('id','name','phone','address');
    }
    public function rider(){
        return $this->belongsTo(Rider::class, 'user_id')->select('id','name','phone','address');
    }
}
