<?php

use Illuminate\Database\Seeder;
use App\Box;

class BoxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $box = new Box;
        $box->name = 'Box one';
        $box->price = '70';
        $box->save();

        $box = new Box;
        $box->name = 'Box two';
        $box->price = '80';
        $box->save();

        $box = new Box;
        $box->name = 'Box three';
        $box->price = '100';
        $box->save();

        $box = new Box;
        $box->name = 'Box four';
        $box->price = '110';
        $box->save();

        $box = new Box;
        $box->name = 'Box five';
        $box->price = '90';
        $box->save();
    }
}
