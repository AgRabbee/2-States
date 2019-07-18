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

Route::get('/', function () {
    return view('pages.index');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('main');
Route::get('signin', 'AuthController@getSignInPage');
Route::post('signin', 'AuthController@postSignIn');
Route::get('signup', 'AuthController@getSignUpPage');
Route::post('signup', 'AuthController@postSignUp');
Route::get('signout', 'AuthController@getLogout');


Route::get('/dashboard','DashboardController@admin')->name('admin');
Route::get('/products','ProductController@index');
Route::get('/products/add','ProductController@create');
Route::post('/products/add','ProductController@store');
Route::get('/product/show/{id}','ProductController@show');

Route::get('/boxes','BoxController@index');
Route::get('/box/add','BoxController@create');
Route::post('/box/add','BoxController@store');
Route::get('/box/show/{id}','BoxController@show');
Route::get('/box/add/product','BoxController@addProduct');
Route::post('/box/add/product','BoxController@storeProductInBox');