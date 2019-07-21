<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\Box;
use App\DeliveryMethod;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            return 1334;
        }

        $subscription = Subscription::orderby('created_at','desc')->get();
        foreach ($subscription as $value) {
            $user_id = $value['user_id'];
            $box_id = $value['box_id'];
            $delivery_method_id = $value['delivery_method_id'];
        }
        $user = User::find($user_id);
        $box = Box::find($box_id);
        $method = DeliveryMethod::find($delivery_method_id);

        $data = array(
            'subscriptions' =>$subscription,
            'user' =>$user,
            'box' =>$box,
            'method' =>$method,
            );
        return view('subscriptions.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $box = Box::find($id);
        $methods = DeliveryMethod::all();
        $data = array(
            'box' => $box,
            'methods' => $methods
        );
        return view('subscriptions.create')->with($data);
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
            'DeliveryMethod' => 'required',
        ]);

        $subscription = new Subscription;
        $subscription->user_id = Auth::user()->id;
        $subscription->box_id = $request->input('box_id');
        $subscription->delivery_method_id = $request->input('DeliveryMethod');
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
