<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    //
    public function index()
    {
        $dishes = Dish::paginate(9);
        return view('dish.index', compact('dishes'));
    }
}
