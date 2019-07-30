<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriptionType extends Model
{
    public function subscriptions()
    {
        return $this->belongsToMany(Subscription::class);
    }
}
