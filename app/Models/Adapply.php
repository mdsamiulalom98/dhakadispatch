<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adapply extends Model
{
    public function notes()
    {
        return $this->hasMany('App\Applynote', 'apply_id')->select('id', 'apply_id', 'note', 'created_at');
    }
}
