<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function boxes()
    {
        return $this->belongsTo('App\Box','box_id','id');
    }

    public function delivery_methods()
    {
        return $this->belongsTo('App\DeliveryMethod','delivery_method_id','id');
    }

    public function subscription_types()
    {
        return $this->belongsTo('App\SubscriptionType','subscription_type_id','id');
    }

    public function subscriptions()
    {
        return $this->belongsTo('App\Subscription','id');
    }
}
