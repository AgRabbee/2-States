<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\User;

class AuthController extends Controller
{
    public function getSignUpPage(){
        return view('auth.signup');
    }

    public function getSignInPage(){
        return view('auth.signin');
    }

    public function postSignUp(Request $request){
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        $user->roles()->attach(Role::where('name','Customer')->first());
        Auth::login($user);
        return redirect('/dashboard');
    }

    public function postSignIn(Request $request){
        if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){

            if(Auth::user()->hasRole('admin') || Auth::user()->hasRole('manager')){
                return redirect('/admin/dashboard');
            }elseif(Auth::user()->hasRole('customer')) {
                return redirect('/dashboard');
            }

        }
        return redirect()->back();
    }

    public function getLogout(){
        Auth::logout();
        return redirect()->route('main');
    }
}
