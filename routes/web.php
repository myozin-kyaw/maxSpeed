<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// }); 

Route::get('/', [HomeController::class, 'index']);
Route::get('vehicle_show/{id}', [HomeController::class, 'show']);
Route::get('featured_view/{id}', [HomeController::class, 'view']);
Route::get('review_show/{id}', [HomeController::class, 'review_show']);


// Route::get('/', [App\Http\Controllers\OrderController::class, 'index'])->name('order.form');
// Route::post('order_submit', [App\Http\Controllers\OrderController::class, 'submit'])->name('order.submit');


/* Admin routes */
Route::resource('vehicle', VehicleController::class);
Route::resource('category', CategoryController::class);
Route::resource('review', CustomerReviewsController::class);

/* Close some routes */
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false,  // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]); 
