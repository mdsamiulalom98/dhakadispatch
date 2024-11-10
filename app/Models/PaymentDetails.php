<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentDetails extends Model
{
    use HasFactory;
    public function parcel(){
        return $this->belongsTo(Parcel::class, 'parcel_id')->select('id','parcel_id','merchant_id');
    }
}
