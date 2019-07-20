<?php

use Illuminate\Database\Seeder;
use App\DeliveryMethod;
class DeliveryMethodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $method = new DeliveryMethod;
        $method->method_name = 'Home Delivery';
        $method->save();

        $method = new DeliveryMethod;
        $method->method_name = 'Collect from Store Front';
        $method->save();
    }
}
