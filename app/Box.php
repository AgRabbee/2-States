<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    public function products(){
        //return $this->belongsToMany('App\Product','box_products','product_id','id');
        return $this->belongsToMany('App\Product','box_product','box_id','product_id');
    }

    public function hasAnyProduct($products){
        if(is_array($products)){
            foreach($products AS $product){
                if($this->hasProduct($product)){
                    return true;
                }
            }
        }else{
            if($this->hasProduct($products)){
                return true;
            }
        }

        return false;
    }

    public function hasProduct($product){
        if($this->products()->where('name',$product)->first()){
            return true;
        }
        return false;
    }

}
