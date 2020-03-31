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

use App\Category;
use App\Product;

Route::get('/', function () {
    // $prod = Product::find(5)->category;
    // return $prod;
    $cat = Category::find(2)->Products;
    return $cat;
    // return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
