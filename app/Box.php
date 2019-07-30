<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    public function products(){
        //return $this->belongsToMany('App\Product','box_products','product_id','id');
        return $this->belongsToMany('App\Product','box_product','box_id','product_id');
    }



}
