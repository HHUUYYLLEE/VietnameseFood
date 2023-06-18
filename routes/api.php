<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    echo "API";
});

Route::get('/city', ['App\Http\Controllers\RestaurantController', 'getCity'])->name('api.getCityID');

Route::get('/dish', ['App\Http\Controllers\DishController', 'getDish'])->name('api.getDishID');

Route::get('/restaurant', ['App\Http\Controllers\RestaurantController', 'getRestaurant'])->name('api.getRestaurantID');