<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function boxes(){
        //return $this->belongsTo('App\Box','Box_products','product_id','id');
        //return $this->hasMany('App\Box');

        return $this->belongsToMany('App\Box','box_products','product_id','box_id');
    }
}
