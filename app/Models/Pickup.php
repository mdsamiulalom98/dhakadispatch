<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function merchant(){
        return $this->belongsTo(Merchant::class, 'merchant_id')->select('id','name','phone','address');
    }
    public function rider(){
        return $this->belongsTo(Rider::class, 'rider_id')->select('id','name','phone','address');
    }

}
