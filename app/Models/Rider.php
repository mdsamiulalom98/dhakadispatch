<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Rider extends Authenticatable
{
    use HasFactory;
    protected $guard = 'rider';

    protected $guarded = [];
    
    public function district(){
        return $this->hasOne('App\Models\District','id','district_id');
    }
    public function area(){
        return $this->hasOne('App\Models\Thana','id','area_id');
    }
    public function parcels(){
        return $this->hasMany('App\Models\Parcel','rider_id');
    }
}
