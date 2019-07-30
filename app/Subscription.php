<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public function users()
    {
        return $this->hasMany(User::class,'');
    }

    public function boxes()
    {
        //return $this->belongsTo('App\Box','subscriptions','id','box_id');
        return $this->hasMany('App\Box');
    }
}
