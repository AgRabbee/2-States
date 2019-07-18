<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    public function products(){
        return $this->hasMany('App\Product');
    }
}
