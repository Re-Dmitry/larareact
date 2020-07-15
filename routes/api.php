<?php

use App\Author;
use App\Blog;
use App\Category;
use App\News;
use App\Product;
use App\Subcategory;
use App\User;
use App\Http\Resources\AuthorResource;
use App\Http\Resources\BlogResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\NewsResource;
use App\Http\Resources\ProductResource;
use App\Http\Resources\SubcategoryResource;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
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

Route::get('/authors',function(){
	return AuthorResource::collection(Author::all());
});

Route::get('/best_author',function(){
	return new AuthorResource(Author::find(36));
});

Route::get('/blogs',function(){
	return BlogResource::collection(Blog::all());
});

Route::get('/best_blog',function(){
	return new BlogResource(Blog::find(4));
});

Route::get('/categorys',function(){
	return CategoryResource::collection(Category::all());
});

Route::get('/best_category',function(){
	return new CategoryResource(Category::find(1));
});

Route::get('/news',function(){
	return NewsResource::collection(News::all());
});

Route::get('/best_news',function(){
	return new NewsResource(News::find(7));
});

Route::get('/products',function(){
	return ProductResource::collection(Product::all());
});

Route::get('/best_product',function(){
	return new ProductResource(Product::find(36));
});

Route::get('/subcategorys',function(){
	return SubcategoryResource::collection(Subcategory::all());
});

Route::get('/best_subcategory',function(){
	return new SubcategoryResource(Subcategory::find(5));
});

Route::get('/users',function(){
	return UserResource::collection(User::all());
});

Route::get('/best_user',function(){
	return new UserResource(User::find(9));
});