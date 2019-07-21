<?php

namespace App\Http\Controllers;

use App\Box;
use App\Product;
use App\Box_products;
use App\DeliveryMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boxes = Box::orderby('created_at','desc')->paginate(5);
        return view('box.index')->with('boxes',$boxes);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('box.createBox')->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required'
        ]);
        $box = new Box;
        $box->name = $request->input('name');
        $box->price = $request->input('price');
        $box->save();

        return redirect('/boxes')->with('success', 'Box created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $box_details = Box::find($id);

        $box_product = Box_products::where('box_id',$id)->get();

        foreach ($box_product as $value) {
            $products_id[] = $value['product_id'];
        }

        for ($i=0; $i < count($products_id); $i++) {
             $id = $products_id[$i];
             $products_details[] = Product::find($id);
        }

        $data = array([
            'box_details'=> $box_details,
            'products'=> $products_details,
            ]);
            //dd($data);
        return view('box.show')->with($data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function edit(Box $box)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Box $box)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function destroy(Box $box)
    {
        //
    }

    public function addProduct()
    {
        $box = Box::all();
        $product = Product::all();
        $data = [
            'boxes' => $box,
            'products' =>$product
        ];
        return view('box.addProductToBox')->with($data);
    }

    public function storeProductInBox(Request $request){
        $this->validate($request,[
            'box_id' => 'required',
            'products_id' => 'required',
        ]);


        //dd($request->input('products_id'));
        $id = $request->input('products_id');
        //return $id;
        for ($i=0; $i < count($id); $i++) {
            $box_product = new Box_products;
            $box_product->box_id = $request->input('box_id');
            $box_product->product_id = $id[$i];

            $box_product->save();

        }

        //return 123;
        return redirect('/boxes')->with('success', 'Product added successfully.');
    }

    //welcome view for customer
    public function welcome()
    {
        $boxes = Box::orderby('created_at','desc')->paginate(5);

        return view('pages.index')->with('boxes',$boxes);
    }


}
