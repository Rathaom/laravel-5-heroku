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

// Route::get('/', ['uses' => 'ProductController@index', 'as' => 'index']);
Route::group(['middleware' => ['web']], function(){
	@include('categories/CategoryRoute.php');
	@include('products/ProductRoute.php');
	Route::get('/', ['uses' => 'HomeController@index', 'as' => 'index']);
});

// Route::get('/', function () {
//     return view('welcome');
// });
