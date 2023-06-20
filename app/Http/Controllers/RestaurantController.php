<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Termwind\style;

class RestaurantController extends Controller
{
    //
    public function index()
    {
        $restaurants = Restaurant::orderByDesc('rating_avg')->paginate(9);
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
        return view('restaurant.filter_by_dish', compact('restaurants_filter'));
    }

    // filter by city
    public function filterByCity($city)
    {
        $restaurants_filter = DB::table('restaurants')
            ->join('citys', 'restaurants.city_id', '=', 'citys.id')
            ->select('restaurants.*')
            ->where('citys.content', 'like', '%' . $city . '%')
            ->distinct()
            ->paginate(9);
        return view('restaurant.filter_by_city', compact('restaurants_filter'));
    }

    // filter by star
    public function filterByStar($star)
    {
        $restaurants_filter = Restaurant::where('rating_avg', '>=', $star)->paginate(9);
        return view('restaurant.filter_by_star', compact('restaurants_filter'));
    }

    public function filterByCriteria(Request $request)
    {
        // Lấy ra các tham số được gửi lên từ form
        $cityID = $request->cityID;
        $dishID = $request->dishID;
        $starID = $request->starID;

        // Xây dựng câu truy vấn để lọc các nhà hàng theo các tiêu chí city, dish, star
        $query = Restaurant::query();

        // Nếu có chọn city thì thêm vào câu truy vấn
        if ($cityID) {
            $query->where('city_id', $cityID);
        }

        // Nếu có chọn dish thì thêm vào câu truy vấn
        if ($dishID) {
            $query->whereHas('dishs', function ($query) use ($dishID) {
                $query->where('dish_id', $dishID);
            });
        }

        // Nếu có chọn star thì thêm vào câu truy vấn
        if ($starID) {
            $query->where('rating_avg', '>=', $starID);
        }

        // Thực hiện truy vấn và lấy ra kết quả phân trang
        $restaurants = $query->orderByDesc('rating_avg')->paginate(9);
        // Trả về view để hiển thị danh sách các nhà hàng đã lọc
        return view('restaurant.index', compact('restaurants', 'dishID', 'cityID', 'starID'));
    }

    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);



        $comments = $restaurant->comments;
        foreach ($comments as $comment) {
            $comment->user_id = $comment->user;
        }
        $star = [];
        for ($i = 1; $i <= 5; $i++) {
            $star[$i] = $comments->where('rating', $i)->count();
        }

        $dishes = DB::table('restaurant_menus')
            ->join('dishes', 'restaurant_menus.dish_id', '=', 'dishes.id')
            ->select('dishes.*', 'restaurant_menus.price')
            ->where('restaurant_menus.restaurant_id', '=', $id)
            ->get();
        $restaurant_imgs = ['https://www.hoteljob.vn/files/Anh-HTJ-Hong/sai-lam-tai-hai-khien-nha-hang-ngay-cang-vang-khach-tt-1.jpg', 'https://vietngon.vn/wp-content/uploads/2022/11/Sushi-world-phung-khac-khoan.jpg'];

        return view('restaurant.show.index', compact('restaurant', 'comments', 'star', 'dishes', 'restaurant_imgs'));
    }

    public function filterReviewsByStar(Request $request, $id)
    {
        $star_num = $request->input('star_num');

        $comments = Comment::where('rating', '=', $star_num)
            ->whereHas('restaurant', function ($query) use ($id) {
                $query->where('restaurant_id', '=', $id);
            })->get();
        foreach ($comments as $comment) {
            $comment->user_id = $comment->user;
        }
        if ($comments->count() == 0) {
            return response()->json([
                'message' => 'Không tìm thấy comments'
            ]);
        }

        return response()->json([
            'comments' => $comments
        ]);
    }
}
