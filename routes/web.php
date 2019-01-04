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
    return view('home');

});
Route::get("/", "SipboController@index0");
Route::get("/cart", "SipboController@index1");
Route::get("/categories", "SipboController@index2");
Route::get("/checkout", "SipboController@index3");
Route::get("/contact", "SipboController@index4");
Route::get("/halamansimulasi", "SipboController@index5");
Route::get("/login", "SipboController@index6");
Route::get("/product", "SipboController@index7");
Route::get("/register", "SipboController@index8");
Route::get("/viabank", "SipboController@index9");
Route::get("/viakartu", "SipboController@index10");
Route::get("/productPertamax", "SipboController@index11");
Route::get("/productPremium", "SipboController@index12");
Route::get("/productPertalite", "SipboController@index13");
Route::get("/productDexlite", "SipboController@index14");
Route::get("/productSolar", "SipboController@index15");
Route::get("/productBensin", "SipboController@index16");





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
