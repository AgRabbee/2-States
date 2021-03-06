<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles(){
        //one role belongs to many user, maching table user_role,
        //user_id is the foreign key from this table
        //role_id is the foreign key form user table in maching table
        return $this->belongsToMany('App\Models\Role','user_role','user_id','role_id');
    }

    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach($roles AS $role){
                if($this->hasRole($role)){
                    return true;
                }
            }
        }else{
            if($this->hasRole($roles)){
                return true;
            }
        }

        return false;
    }

    public function hasRole($role){
        if($this->roles()->where('name',$role)->first()){
            return true;
        }
        return false;
    }

    public function boxes()
    {
        //return $this->belongsToMany(Box::class,'subscriptions');
        return $this->belongsToMany('App\Box','subscriptions','user_id','box_id')->withPivot('status');
        //return $this->belongsToMany('App\Product','box_product','box_id','product_id');
    }

    public function delivery_methods()
    {
        //return $this->belongsToMany(DeliveryMethod::class,'subscriptions');
        return $this->belongsToMany('App\DeliveryMethod','subscriptions','user_id','delivery_method_id');
        //return $this->belongsToMany('App\Product','box_product','box_id','product_id');
    }

    public function subscription_types()
    {
        //return $this->belongsToMany(DeliveryMethod::class,'subscriptions');
        return $this->belongsToMany('App\SubscriptionType','subscriptions','user_id','subscription_type_id');
        //return $this->belongsToMany('App\Product','box_product','box_id','product_id');
    }

    public function subscriptions()
    {
        //return $this->belongsToMany(DeliveryMethod::class,'subscriptions');
        return $this->belongsToMany('App\Subscription','subscriptions','user_id');
        //return $this->belongsToMany('App\Product','box_product','box_id','product_id');
    }
}
