<?php

use App\Product;
use App\User;
use Illuminate\Support\Facades\DB;
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

Route::get('/', 'IndexController@index');

Route::get('/test', function(){
	return response()->json(Product::get());
	//return Product::get(); //ajax запрос
	//$users = User::get();
	//dd($users);
	//$products = Product::with('category.subCategories')->get();
	//dd($products);
	
});