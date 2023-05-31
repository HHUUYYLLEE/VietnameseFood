<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('citys')->insert([
            ['Content' => 'An Giang', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Bà Rịa - Vũng Tàu', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Bạc Liêu', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Bắc Kạn', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Bắc Ninh', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Bến Tre', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Bình Định', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Bình Dương', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Bình Phước', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Bình Thuận', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Cà Mau', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Cao Bằng', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Đắk Lắk', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Đắk Nông', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Điện Biên', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Đồng Nai', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Đồng Tháp', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Gia Lai', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Hà Giang', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Hà Nam', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Hà Tĩnh', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Hải Dương', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Hậu Giang', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Hòa Bình', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Hưng Yên', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Khánh Hòa', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Kiên Giang', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Kon Tum', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Lai Châu', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Lâm Đồng', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Lạng Sơn', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Lào Cai', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Long An', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Nam Định', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Nghệ An', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Ninh Bình', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Ninh Thuận', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Phú Thọ', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Quảng Bình', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Quảng Nam', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Quảng Ngãi', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Quảng Ninh', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Quảng Trị', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Sóc Trăng', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Sơn La', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Tây Ninh', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Thái Bình', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Thái Nguyên', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Thanh Hóa', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Thừa Thiên Huế', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Tiền Giang', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Trà Vinh', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Tuyên Quang', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Vĩnh Long', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Vĩnh Phúc', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Yên Bái', 'updated_at' => now(), 'created_at' => now()],
            ['Content' => 'Phú Yên', 'updated_at' => now(), 'created_at' => now()],
        ]);
    }
}
