<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $guarded = [];
    
    public function areas(){
        return $this->hasMany('App\Models\Thana','district_id');
    }
}
