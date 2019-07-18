<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin      = Role::where('name','Admin')->first();
        $roleManager    = Role::where('name','Manager')->first();
        $roleCustomer   = Role::where('name','Customer')->first();
        
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@test.com';
        $admin->password = bcrypt('123456');
        $admin->save();
        $admin->roles()->attach($roleAdmin);
        
        $manager = new User();
        $manager->name = 'Manager';
        $manager->email = 'manager@test.com';
        $manager->password = bcrypt('123456');
        $manager->save();
        $manager->roles()->attach($roleManager);
        
        $customer1 = new User();
        $customer1->name = 'Customer 1';
        $customer1->email = 'customer1@test.com';
        $customer1->password = bcrypt('123456');
        $customer1->save();
        $customer1->roles()->attach($roleCustomer);
        
        $customer2 = new User();
        $customer2->name = 'Customer 2';
        $customer2->email = 'customer2@test.com';
        $customer2->password = bcrypt('123456');
        $customer2->save();
        $customer2->roles()->attach($roleCustomer);
    }
}
