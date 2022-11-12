<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/products', 'App\Http\Controllers\ProductController@index');
Route::get('/products/{category}', 'App\Http\Controllers\ProductController@getProductsByCategory');
Route::get('/products/search/{search}', 'App\Http\Controllers\ProductController@searchProducts');
Route::get('/categories', 'App\Http\Controllers\CategoryController@index');
