<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function box(){
        return $this->belongsTo('App\Box');
    }
}
