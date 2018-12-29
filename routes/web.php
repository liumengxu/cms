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
    return view('welcome');
});
Route::get('/order',"Order\indexController@detail");
Route::get("/order","Order\indexController@use");
Route::get("/order","Order\indexController@cart");
Route::get("/vip/{id}","Vip\indexController@cart");