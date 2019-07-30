<?php

namespace App\Http\Controllers;

use App\Box;
use App\Product;
use App\Box_product;
use App\DeliveryMethod;
use App\SubscriptionType;
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
        $boxes = Box::orderby('created_at','desc')->get();
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
            'name' => 'required'
        ]);
        $box = new Box;
        $box->box_name = $request->input('name');
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
        return view('box.show')->with('box_details', $box_details);

    /*    $product_details = DB::table('boxes')
        ->select('products.name as productName')
        ->join('box_products', 'boxes.id', '=', 'box_products.box_id')
        ->join('products', 'products.id', '=', 'box_products.product_id')
        ->where('boxes.id', $id)
        ->get();

          $box = Box::find($id);
           $name = $box['name'];
           $price = $box['price'];
          //dd($name.$price);



        //dd($data);

         return view('box.show', compact('product_details','name','price'));
         // return view('box.show')->with('box',$box);


*/


/*

        //dd($box);
        $box_details = Box::find($id)->toArray();

        $box_product = Box_products::where('box_id',$id)->get();

        //dd($box_product);

        foreach ($box_product as $value) {
            $products_id[] = $value['product_id'];
        }

        for ($i=0; $i < count($products_id); $i++) {
             $id = $products_id[$i];
             $products_details[] = Product::find($id);
        }

        $data = array(
            'box_details' => $box_details,
            'products' => $products_details,
            );
            //dd($data);
        return view('box.show')->with($data);
*/
        //$box = Box_products::find($id)->get();
        //$box= Box::all();
        //dd($box_details->products);







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

        $box_id = $request->input('box_id');
        $product_id = $request->input('products_id');
        $box = Box::find($box_id);

        for ($i=0; $i < count($product_id); $i++) {
            $box->products()->attach($product_id[$i]);
        }

        //dd($box->products);
        //return 123;
        return redirect('/boxes')->with('success', 'Product added successfully.');
    }

    //welcome view for customer
    public function welcome()
    {
        $subscriptionType = SubscriptionType::all();

        return view('pages.index')->with('subscriptionType',$subscriptionType);
    }


}
