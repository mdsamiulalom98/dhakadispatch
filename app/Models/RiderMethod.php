<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiderMethod extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function bankname(){
        return $this->belongsTo('App\Models\Bank','bank_id');
    }
}
