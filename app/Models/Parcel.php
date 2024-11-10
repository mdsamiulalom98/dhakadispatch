<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function parcelstatus(){
        return $this->belongsTo(ParcelStatus::class, 'status');
    }
    public function district(){
        return $this->belongsTo(District::class, 'district_id');
    }
    public function area(){
        return $this->belongsTo(Thana::class, 'area_id');
    }
    public function merchant(){
        return $this->belongsTo(Merchant::class, 'merchant_id')->select('id','name','phone','address');
    }
    public function rider(){
        return $this->belongsTo(Rider::class, 'rider_id')->select('id','name','phone','address');
    }
}
