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


/* User Route */
Route::get('/', ['middleware' => 'isadmin', HomeController::class, 'index']);
Route::get('vehicle_show/{id}', ['middleware' => 'isadmin', HomeController::class, 'show']);
Route::get('featured_view/{id}', ['middleware' => 'isadmin', HomeController::class, 'view']);
Route::get('review_show/{id}', ['middleware' => 'isadmin', HomeController::class, 'review_show']);

/* Admin routes */
Route::resource('vehicle', VehicleController::class)->middleware('isadmin');
Route::resource('category', CategoryController::class)->middleware('isadmin');
Route::resource('review', CustomerReviewsController::class)->middleware('isadmin');

// Route::get('/', [App\Http\Controllers\OrderController::class, 'index'])->name('order.form');
// Route::post('order_submit', [App\Http\Controllers\OrderController::class, 'submit'])->name('order.submit');

/* Close some routes */
Auth::routes([
    'reset' => false,  // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]); 
