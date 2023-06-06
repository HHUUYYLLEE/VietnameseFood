<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestaurantController extends Controller
{
    //
    public function index()
    {
        $restaurants = Restaurant::paginate(9);
        return view('restaurant.index', compact('restaurants'));
    }
    // filter by dish function
    public function filterByDish($dish_id)
    {
        $restaurants_filter = DB::table('restaurants')
            ->join('restaurant_menus', 'restaurants.id', '=', 'restaurant_menus.restaurant_id')
            ->where('restaurant_menus.dish_id', '=', $dish_id)
            ->distinct()
            ->paginate(9);
        return view('restaurant.filter_by_dish',compact('restaurants_filter'));
    }

    // filter by city
    public function filterByCity($city)
    {
        $restaurants_filter = DB::table('restaurants')
            ->join('citys', 'restaurants.city_id', '=', 'citys.id')
            ->select('restaurants.*')
            ->where('citys.content', 'like', '%'.$city.'%')
            ->distinct()
            ->paginate(9);
        return view('restaurant.filter_by_city', compact('restaurants_filter'));
    }

    // filter by star
    public function filterByStar($star) {
        $restaurants_filter = Restaurant::where('rating_avg', '>=', $star)->paginate(9);
        return view('restaurant.filter_by_star', compact('restaurants_filter'));
    }
}
