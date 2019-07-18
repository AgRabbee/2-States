<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = new Role();
        $superAdmin->name = 'Admin';
        $superAdmin->description = 'Admin has full power to this app';
        $superAdmin->save();
        
        $manager = new Role();
        $manager->name = 'Manager';
        $manager->description = 'Manager can anything except user management';
        $manager->save();
        
        $custome = new Role();
        $custome->name = 'Customer';
        $custome->description = 'Customer can only access to his own account';
        $custome->save();
        
    }
}
