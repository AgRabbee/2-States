<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function box(){
        //return $this->belongsTo('App\Box','Box_products','product_id','id');
        return $this->hasManyThrough('App\Box', 'App\Box_products','product_id','id');
    }
}
