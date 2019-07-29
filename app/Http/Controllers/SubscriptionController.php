<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\Box;
use App\DeliveryMethod;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('customer') == true) {
            $user_id = Auth::user()->id;
            $subscription = Subscription::where('user_id',$user_id)->get();
            //dd($subscription);

            return view('subscriptions.user_subscription')->with('user_subscription',$subscription);
        }

        //===================admin=========================
        if (Auth::user()->hasRole('admin') == true) {
            $subscriptions = Subscription::orderby('created_at','desc')->get();
            /*$subscriptions = DB::table('box_products')
                ->select('users.name as User, boxes.name as Box name, SUM(products.price) as Price, delivery_methods.method_name as Delivery method, subscription_types.subscription_type_name as Subscription Type, subscriptions.status as Status')
                ->join('boxes', 'boxes.id', '=', 'box_products.box_id')
                ->join('products', 'products.id', '=', 'box_products.product_id')
                ->join('users', '.id', '=', 'subscriptions.user_id')
                ->join('subscription_types', '.id', '=', 'subscriptions.subscription_type_id')
                ->distinct()
                ->get();
*/
                //dd($subscriptions);


            return view('subscriptions.index')->with('subscriptions',$subscriptions);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $boxes = Box::all();
        $random_id = $boxes->random()->id;

        //dd($random_id);
        $subscription = new Subscription;
        $subscription->user_id = Auth::user()->id;
        $subscription->box_id = $random_id;
        $subscription->delivery_method_id = 1;
        $subscription->subscription_type_id = $request->input('type_id');
        $subscription->status = 0;
        //dd($subscription);
        $subscription->save();

        return redirect('/user/subscriptions')->with('success','Subscription Completed Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}
