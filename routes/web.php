<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ProdactController@index');
Route::get('product-detail/{id}', 'ProdactController@details');
Route::post('/add-cart', 'ProdactController@addtocart');
Route::get('cart-lists', 'ProdactController@add_list');


