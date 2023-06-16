<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($dish_id)
    {
         //return json restaurant only data like  {
        //     "id": 1,
        //     "name": "Nhà hàng ABC",
        //     "address": "123 Đường A, Quận 1, TP.HCM",
        //     "introduction": "Nhà hàng sang trọng với không gian thoáng đãng, phục vụ các món ăn Âu và Á.",
        //     "legality": 1,
        //     "created_at": "2023-06-03T00:58:34.000000Z",
        //     "updated_at": "2023-06-03T00:58:34.000000Z"
        // },
        $dish = Dish::find($dish_id);
        $restaurants = $dish->restaurant()->get();
        return response()->json($restaurants, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
