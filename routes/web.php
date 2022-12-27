<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\HomeConroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenufactureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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


    // Frontend Site Route Start...........................................
    Route::get('/',[HomeController::class,'index'])->name('home');


    // product by category
    Route::get('/product-by-category/{category_id}',[SomeController::class,'productbycategory'])->name('product_by_category');
    // product by menufacture
    Route::get('/product-by-menufacture/{menufacture_id}',[SomeController::class,'productbymenufacture'])->name('product_by_menufacture');
    // view product
    Route::get('/view-product/{product_id}',[SomeController::class,'productview'])->name('view-product');
    // Add To Cart
    Route::post('add_to_cart',[CartController::class,'addtocart'])->name('add-to-cart');





// Frontend Site Route End..................................

// Backend Site Route Start....................................



Route::group(['prefix'=>'backend'],function(){
    Route::get('/',[HomeConroller::class,'login'])->name('login');
    Route::post('/admin-dashboard',[HomeConroller::class,'login_success'])->name('login_success');
    Route::get('/logout',[HomeConroller::class,'logout'])->name('logout');

    Route::get('/dashboard',[HomeConroller::class,'dashboard'])->name('dashboard');
    // catgory realated route..............................
    Route::resource('categories',CategoryController::class);
    // catgory realated route..............................

    // Menufacture realated route..............................
    Route::resource('menufacture',MenufactureController::class);
    // Menufacture realated route..............................

    // Product realated route..............................
    Route::resource('products',ProductController::class);
    // Product realated route..............................

    // Slider realated route..............................
    Route::resource('sliders',SliderController::class);
    // Slider realated route..............................



    // Some One Realated Route......................
    Route::get('un-active/{category}',[App\Http\Controllers\SomeController::class,'unactive'])->name('un_active');
    Route::get('active/{category}',[App\Http\Controllers\SomeController::class,'active'])->name('active');

    Route::get('un-active-brand/{menufacture}',[App\Http\Controllers\SomeController::class,'unactivebrand'])->name('unactive.brand');
    Route::get('active-brand/{menufacture}',[App\Http\Controllers\SomeController::class,'activebrand'])->name('active.brand');

    Route::get('un-active-product/{product}',[App\Http\Controllers\SomeController::class,'unactiveproduct'])->name('unactive.product');
    Route::get('active-product/{product}',[App\Http\Controllers\SomeController::class,'activeproduct'])->name('active.product');

    Route::get('un-active-slider/{slider}',[App\Http\Controllers\SomeController::class,'unactiveslider'])->name('unactive.slider');
    Route::get('active-slider/{slider}',[App\Http\Controllers\SomeController::class,'activeslider'])->name('active.slider');


});


// Backend Site Route End....................................
