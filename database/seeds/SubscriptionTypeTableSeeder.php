<?php

use Illuminate\Database\Seeder;
use App\SubscriptionType;

class SubscriptionTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptionType = new SubscriptionType;
        $subscriptionType->subscription_type_name = "Monthly";
        $subscriptionType->save();

        $subscriptionType = new SubscriptionType;
        $subscriptionType->subscription_type_name = "Half-Yearly";
        $subscriptionType->save();

        $subscriptionType = new SubscriptionType;
        $subscriptionType->subscription_type_name = "Yearly";
        $subscriptionType->save();

        $subscriptionType = new SubscriptionType;
        $subscriptionType->subscription_type_name = "One-Time";
        $subscriptionType->save();
    }
}
