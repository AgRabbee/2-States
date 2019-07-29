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
        $product->product_name = 'Product One';
        $product->description = 'Product One description';
        $product->price = '80';
        $product->save();

        $product = new Product;
        $product->product_name = 'Product Two';
        $product->description = 'Product Two description';
        $product->price = '70';
        $product->save();

        $product = new Product;
        $product->product_name = 'Product Three';
        $product->description = 'Product Three description';
        $product->price = '90';
        $product->save();

        $product = new Product;
        $product->product_name = 'Product Four';
        $product->description = 'Product Four description';
        $product->price = '75';
        $product->save();

        $product = new Product;
        $product->product_name = 'Product Five';
        $product->description = 'Product Five description';
        $product->price = '100';
        $product->save();
    }
}
