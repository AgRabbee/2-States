<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('pages.index');
});*/
Route::get('/','BoxController@welcome');
Auth::routes();

Route::get('signin', 'AuthController@getSignInPage');
Route::post('signin', 'AuthController@postSignIn');
Route::get('signup', 'AuthController@getSignUpPage');
Route::post('signup', 'AuthController@postSignUp');
Route::get('signout', 'AuthController@getLogout');


Route::get('/admin/dashboard','DashboardController@admin');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/products','ProductController@index');
    Route::get('/products/add','ProductController@create');
    Route::post('/products/add','ProductController@store');
    Route::get('/product/show/{id}','ProductController@show');

//==================box========================
    Route::get('/boxes','BoxController@index');
    Route::get('/box/add','BoxController@create');
    Route::post('/box/add','BoxController@store');
    Route::get('/box/show/{id}','BoxController@show');
    Route::get('/box/add/product','BoxController@addProduct');
    Route::post('/box/add/product','BoxController@storeProductInBox');

//==================delivery methods========================
    Route::get('/methods','DeliveryMethodController@index');
    Route::get('/method/add','DeliveryMethodController@create');
    Route::post('/method/add','DeliveryMethodController@store');


//==================subscriptions types========================
    Route::get('/types','SubscriptionController@allTypes');
    Route::get('/type/add','SubscriptionController@createType');
    Route::post('/type/add','SubscriptionController@addType');


//==================subscriptions ========================
    Route::get('/subscriptions','SubscriptionController@index');



//==================Subscription types========================

});

Route::group(['middleware'=>['auth','auth.customer']],function(){

    Route::get('/dashboard','DashboardController@index');

    Route::get('/user/subscriptions','SubscriptionController@index');
    Route::post('/subscriptions/create','SubscriptionController@store');
});
