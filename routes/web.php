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
    return view('admin.home');
});
Route::resource('/','ItemsController');

Route::resource('/shop','AddItemsController',[ 'names' => ['index'=>'shop']]);
Route::resource('/admin','ShopController',[ 'names' => ['index'=>'admin']]);
