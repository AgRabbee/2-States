<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product;
        $product->name = 'Product One';
        $product->description = 'Product One description';
        $product->save();

        $product = new Product;
        $product->name = 'Product Two';
        $product->description = 'Product Two description';
        $product->save();

        $product = new Product;
        $product->name = 'Product Three';
        $product->description = 'Product Three description';
        $product->save();

        $product = new Product;
        $product->name = 'Product Four';
        $product->description = 'Product Four description';
        $product->save();

        $product = new Product;
        $product->name = 'Product Five';
        $product->description = 'Product Five description';
        $product->save();
    }
}
