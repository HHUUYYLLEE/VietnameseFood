<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;
use App\Models\Restaurant;

class HomeController extends Controller
{
    //
    public function index()
    {
        $dishes = Dish::inRandomOrder()->limit(4)->get();
        $restaurants = Restaurant::orderByDesc('rating_avg')->take(4)->get();
        return view('home.index', compact('dishes', 'restaurants'));
    }
}
