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

    public function show($id)
    {
        $dish = Dish::findOrFail($id);
        return view('dish.show', compact('dish'));
    }
}
