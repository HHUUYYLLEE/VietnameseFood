<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Restaurant;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DishController extends Controller
{
    //
    public function index()
    {
        $dishes = Dish::paginate(9);
        return view('dish.index', compact('dishes'));
    }

    // filter function
    public function filterByCriteria(Request $request){
        // Lấy ra các tham số được gửi lên từ form
        $dishID = $request->dishID;

        // Xây dựng câu truy vấn để lọc các nhà hàng theo các tiêu chí city, dish, star
        $query = Dish::query();

        // Nếu có chọn dish thì thêm vào câu truy vấn
        if ($dishID) {
            $query->where('type_id', $dishID);
        }

        // Thực hiện truy vấn và lấy ra kết quả phân trang
        $dishes = $query->paginate(9);
        // Trả về view để hiển thị danh sách các nhà hàng đã lọc
        return view('dish.index', compact('dishes', 'dishID'));
    }

    public function filterByDishName(Request $request)
    {
        $dishName = $request->dishName;
        $dishes = Dish::where('name', 'like', '%' . $dishName . '%')->paginate(9);
        return view('dish.filter_by_dish_name', compact('dishes'));
    }

    public function show($id)
    {
        $dish = Dish::findOrFail($id);

        $restaurants = Restaurant::whereHas('dishes', function ($query) use ($id) {
            $query->where('dishes.id', $id);
        })->get();

        return view('dish.show.index', compact('dish', 'restaurants'));
    }
}