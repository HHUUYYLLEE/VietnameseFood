<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    //
    public function index()
    {
        $restaurants = Restaurant::paginate(9);
        return view('restaurant.index', compact('restaurants'));
    }
}
