<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserRoleTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(BoxTableSeeder::class);
        $this->call(DeliveryMethodTableSeeder::class);
        $this->call(SubscriptionTypeTableSeeder::class);
    }
}
