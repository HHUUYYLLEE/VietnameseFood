<?php

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

Route::get('/', function () {
    return view('home.index');
});

//group Home
Route::prefix('home')->group(function () {
   Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
   // trong home gom 3 phan la restaurant noi tieng, restaurant danh gia cao, dish danh gia cao
   // ae tu chia blade nha
});

Route::prefix('restaurant')->group(function () {
    Route::get('/', [\App\Http\Controllers\RestaurantController::class, 'index'])->name('restaurant.index');
    //duc: nay la restaurant ichiran
});

Route::prefix('dish')->group(function () {
    Route::get('/', [\App\Http\Controllers\DishController::class, 'index'])->name('dish.index');
    //duc: nay la dish ichiran
});

Route::get('/booking', [\App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');

Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);