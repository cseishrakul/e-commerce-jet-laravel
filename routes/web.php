<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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



Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Redirect Page Select
Route::get('/redirect',[HomeController::class,'redirect'])->middleware('auth','verified');

// AdminController

// Category

Route::get('/category',[AdminController::class,'category']);
Route::post('/add_category',[AdminController::class,'add_category']);
Route::get('/show_category',[AdminController::class,'show_category']);
Route::get('/category_delete/{id}',[AdminController::class,'delete_category']);
Route::get('/view-category/{slug}',[HomeController::class,'view_category']);

// End Category

// Slider
Route::get('/slider',[AdminController::class,'slider']);
Route::post('/add_slider',[AdminController::class,'add_slider']);
Route::get('/delete/{id}',[AdminController::class,'delete_slider']);
// End Slider

// Banner
Route::get('/banner',[AdminController::class,'banner']);
Route::post('/add_banner',[AdminController::class,'add_banner']);
Route::get('/show_banner',[AdminController::class,'show_banner']);
Route::get('/delete_banner/{id}',[AdminController::class,'delete_banner']);
Route::get('/edit/{id}',[AdminController::class,'update_banner']);
Route::post('/update_banner/{id}',[AdminController::class,'edit_banner']);
// End Banner

// Product
Route::get('/add_product',[AdminController::class,'add_product']);
Route::post('/plus_product',[AdminController::class,'plus_product']);
Route::get('/show_product',[AdminController::class,'show_product']);
Route::get('/update/{id}',[AdminController::class,'update_product']);
Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
Route::post('/edit_product/{id}',[AdminController::class,'edit_product']);
// End Product

// Orders
Route::get('/show_order',[AdminController::class,'show_order']);
Route::get('/delivered/{id}',[AdminController::class,'order_delivered']);
Route::get('/print_pdf/{id}',[AdminController::class,'print_pdf']);
// End Orders

// End AdminController



// HomeController
Route::get('/product_details/{id}',[HomeController::class,'product_details']);
Route::get('/product',[HomeController::class,'product']);
Route::post('/add_to_cart/{id}',[HomeController::class,'add_to_cart']);
Route::get('/show_cart',[HomeController::class,'show_cart']);
Route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);
Route::get('/cash_on_delivery',[HomeController::class,'cash_on_delivery']);
Route::get('/orders',[HomeController::class,'orders']);
Route::get('/cancel_order/{id}',[HomeController::class,'cancel_order']);


// End HomeController
