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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

//group Home
Route::prefix('home')->group(function () {
    Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
    // trong home gom 3 phan la restaurant noi tieng, restaurant danh gia cao, dish danh gia cao
    // ae tu chia blade nha
});

Route::prefix('restaurant')->group(function () {
    //duc: nay la restaurant ichiran
    Route::get('/', [\App\Http\Controllers\RestaurantController::class, 'index'])->name('restaurant.index');
    //duc: filter theo dish_type
    Route::get('/filterByDish/{dish_id}',  [\App\Http\Controllers\RestaurantController::class, 'filterByDish'])->name('restaurants.filterByDish');

    //duc: filter theo city
    Route::get('/filterByCity/{city}',  [\App\Http\Controllers\RestaurantController::class, 'filterByCity'])->name('restaurants.filterByCity');

    //duc: filter theo star
    Route::get('/filterByStar/{star}',  [\App\Http\Controllers\RestaurantController::class, 'filterByStar'])->name('restaurants.filterByStar');

    Route::get('/filterByCriteria',  [\App\Http\Controllers\RestaurantController::class, 'filterByCriteria'])->name('restaurants.filterByCriteria');

    Route::get('/filterByRestaurantName', [\App\Http\Controllers\RestaurantController::class, 'filterByRestaurantName'])->name('restaurants.filterByRestaurantName');

    Route::get('/filterByAddressName', [\App\Http\Controllers\RestaurantController::class, 'filterByAddressName'])->name('restaurants.filterByAddressName');
});

Route::prefix('dish')->group(function () {
    //duc: nay la dish ichiran
    Route::get('/', [\App\Http\Controllers\DishController::class, 'index'])->name('dish.index');

    Route::get('/filterByCriteria',  [\App\Http\Controllers\DishController::class, 'filterByCriteria'])->name('dish.filterByCriteria');

    Route::get('/filterByDishName', [\App\Http\Controllers\DishController::class, 'filterByDishName'])->name('dish.filterByDishName');
});

Route::get('/booking', [\App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');

Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
