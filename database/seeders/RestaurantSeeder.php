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
                'Name' => 'Nhà hàng ABC',
                'Address' => '123 Đường A, Quận 1, TP.HCM',
                'Introduction' => 'Nhà hàng sang trọng với không gian thoáng đãng, phục vụ các món ăn Âu và Á.',
                'Image_URL' => 'https://example.com/image1.jpg',
                'TypeID' => 1,
                'NumberOfTables' => 20,
                'UserID' => 1,
                'RatingAvg' => 4.5,
                'Status' => 1,
                'Opening_time' => '2023-05-31 10:00:00',
                'Closing_time' => '2023-05-31 22:00:00',
                'Legality' => 1,
                'CityID' => 1,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Nhà hàng XYZ',
                'Address' => '456 Đường B, Quận 2, TP.HCM',
                'Introduction' => 'Nhà hàng chuyên phục vụ các món ăn Việt Nam, tinh hoa của ẩm thực đất nước.',
                'Image_URL' => 'https://example.com/image2.jpg',
                'TypeID' => 2,
                'NumberOfTables' => 30,
                'UserID' => 2,
                'RatingAvg' => 4.0,
                'Status' => 1,
                'Opening_time' => '2023-05-31 08:00:00',
                'Closing_time' => '2023-05-31 21:00:00',
                'Legality' => 1,
                'CityID' => 2,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Nhà hàng LMN',
                'Address' => '789 Đường C, Quận 3, TP.HCM',
                'Introduction' => 'Nhà hàng phục vụ các món ăn Trung Hoa, đặc trưng của nền ẩm thực đông anh.',
                'Image_URL' => 'https://example.com/image3.jpg',
                'TypeID' => 3,
                'NumberOfTables' => 25,
                'UserID' => 3,
                'RatingAvg' => 3.5,
                'Status' => 1,
                'Opening_time' => '2023-05-31 11:00:00',
                'Closing_time' => '2023-05-31 23:00:00',
                'Legality' => 1,
                'CityID' => 3,
                'updated_at' => now(),
                'created_at' => now()
            ],
            [
                'Name' => 'Nhà hàng PQR',
                'Address' => '246 Đường D, Quận 4, TP.HCM',
                'Introduction' => 'Nhà hàng phục vụ các món ăn Hàn Quốc, sự kết hợp tinh tế giữa nguyên liệu và gia vị.',
                'Image_URL' => 'https://example.com/image4.jpg',
                'TypeID' => 4,
                'NumberOfTables' => 15,
                'UserID' => 4,
                'RatingAvg' => 4.5,
                'Status' => 1,
                'Opening_time' => '2023-05-31 10:30:00',
                'Closing_time' => '2023-05-31 22:30:00',
                'Legality' => 1,
                'CityID' => 4,
                'updated_at' => now(),
                'created_at' => now()
            ],
        ];
        DB::table('restaurants')->insert($restaurants);
    }
}
