<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarParts extends Model
{
    public function user(){
        return $this->belongsToMany('App\User');
    }
}
