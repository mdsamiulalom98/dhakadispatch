<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryCharge extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function zone(){
        return $this->belongsTo('App\Models\DeliveryZone','zone_id');
    }

    public function service(){
        return $this->belongsTo('App\Models\ServiceType','service_id');
    }
}
