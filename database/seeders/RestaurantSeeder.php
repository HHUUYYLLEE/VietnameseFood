<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $restaurants = [
            [
                'name' => 'Nhà hàng ABC',
                'address' => '123 Đường A, Quận 1, TP.HCM',
                'introduction' => 'Nhà hàng sang trọng với không gian thoáng đãng, phục vụ các món ăn Âu và Á.',
                'image_url' => 'https://example.com/image1.jpg',
                'type_id' => 1,
                'number_of_tables' => 20,
                'user_id' => 1,
                'rating_avg' => 4.5,
                'status' => 1,
                'opening_time' => '2023-05-31 10:00:00',
                'closing_time' => '2023-05-31 22:00:00',
                'legality' => 1,
                'city_id' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Nhà hàng XYZ',
                'address' => '456 Đường B, Quận 2, TP.HCM',
                'introduction' => 'Nhà hàng chuyên phục vụ các món ăn Việt Nam, tinh hoa của ẩm thực đất nước.',
                'image_url' => 'https://example.com/image2.jpg',
                'type_id' => 2,
                'number_of_tables' => 30,
                'user_id' => 2,
                'rating_avg' => 4.0,
                'status' => 1,
                'opening_time' => '2023-05-31 08:00:00',
                'closing_time' => '2023-05-31 21:00:00',
                'legality' => 1,
                'city_id' => 2,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Nhà hàng LMN',
                'address' => '789 Đường C, Quận 3, TP.HCM',
                'introduction' => 'Nhà hàng phục vụ các món ăn Trung Hoa, đặc trưng của nền ẩm thực đông anh.',
                'image_url' => 'https://example.com/image3.jpg',
                'type_id' => 3,
                'number_of_tables' => 25,
                'user_id' => 3,
                'rating_avg' => 3.5,
                'status' => 1,
                'opening_time' => '2023-05-31 11:00:00',
                'closing_time' => '2023-05-31 23:00:00',
                'legality' => 1,
                'city_id' => 3,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'name' => 'Nhà hàng PQR',
                'address' => '246 Đường D, Quận 4, TP.HCM',
                'introduction' => 'Nhà hàng phục vụ các món ăn Hàn Quốc, sự kết hợp tinh tế giữa nguyên liệu và gia vị.',
                'image_url' => 'https://example.com/image4.jpg',
                'type_id' => 4,
                'number_of_tables' => 15,
                'user_id' => 4,
                'rating_avg' => 4.5,
                'status' => 1,
                'opening_time' => '2023-05-31 10:30:00',
                'closing_time' => '2023-05-31 22:30:00',
                'legality' => 1,
                'city_id' => 4,
                'updated_at' => now(),
                'created_at' => now()
            ],
        ];
        DB::table('restaurants')->insert($restaurants);
    }
}
