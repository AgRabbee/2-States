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
        $box->box_name = 'Box one';
        $box->save();

        $box = new Box;
        $box->box_name = 'Box two';
        $box->save();

        $box = new Box;
        $box->box_name = 'Box three';
        $box->save();

        $box = new Box;
        $box->box_name = 'Box four';
        $box->save();

        $box = new Box;
        $box->box_name = 'Box five';
        $box->save();
    }
}
