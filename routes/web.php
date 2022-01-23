<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerReviewsController;

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

/* User Route */
Route::get('/', ['middleware' => 'isadmin', HomeController::class, 'index'])->name('index');
Route::get('vehicle_show/{id}', ['middleware' => 'isadmin', HomeController::class, 'show'])->name('vehicle_show');
Route::get('review_show/{id}', ['middleware' => 'isadmin', HomeController::class, 'review_show'])->name('review_show');
Route::get('search',[HomeController::class, 'search'])->name('search');
Route::post('order_submit', [OrderController::class, 'submit'])->name('order.submit'); // user order 
Route::get('order', [OrderController::class, 'order'])->name('admin.order'); // orderList 
Route::get('/order_finish/{id}', [OrderController::class, 'order_finish'])->name('admin.order_finish');

/* Admin routes */
Route::resource('vehicle', VehicleController::class, ['names' => 'vehicle'])->middleware('isadmin');
Route::resource('category', CategoryController::class, ['names' => 'category'])->middleware('isadmin');
Route::resource('review', CustomerReviewsController::class, ['names' => 'review'])->middleware('isadmin');
Route::resource('admin', AdminController::class, ['names' => 'admin'])->middleware('isadmin');

/* Add to Cart */
Route::post('/cart_store', [CartController::class, 'store'])->name('cart.store');
Route::get('/cart_destroy/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

/* Close some routes */
Auth::routes([
    'reset' => false,  // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]); 
