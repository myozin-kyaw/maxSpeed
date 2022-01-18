<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

// use \App\Http\Controllers\Admin\{
//     UserController,
//     ProductController,
//     AnotherController,
// }

// Route::prefix('admin')->name('admin.')->group(function () {

//     Route::resource('users', UserController::class);

//     Route::resource('products', ProductController::class);

//     Route::resource('another', AnotherController::class);

// });

/* User Route */
Route::get('/', ['middleware' => 'isadmin', HomeController::class, 'index'])->name('index');
Route::get('vehicle_show/{id}', ['middleware' => 'isadmin', HomeController::class, 'show']);
Route::get('featured_view/{id}', ['middleware' => 'isadmin', HomeController::class, 'view']);
Route::get('review_show/{id}', ['middleware' => 'isadmin', HomeController::class, 'review_show']);

/* Admin routes */
// Route::resource('vehicle', VehicleController::class)->middleware('isadmin');
// Route::resource('category', CategoryController::class)->middleware('isadmin');
// Route::resource('review', CustomerReviewsController::class)->middleware('isadmin');

Route::resource('vehicle', VehicleController::class, ['names' => 'vehicle'])->middleware('isadmin');
Route::resource('category', CategoryController::class, ['names' => 'category'])->middleware('isadmin');
Route::resource('review', CustomerReviewsController::class, ['names' => 'review'])->middleware('isadmin');
Route::resource('admin', AdminController::class, ['names' => 'admin'])->middleware('isadmin');

/* Close some routes */
Auth::routes([
    'reset' => false,  // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]); 


// Route::get('/', [App\Http\Controllers\OrderController::class, 'index'])->name('order.form');
// Route::post('order_submit', [App\Http\Controllers\OrderController::class, 'submit'])->name('order.submit');