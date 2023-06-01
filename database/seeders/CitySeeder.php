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
            ['content' => 'An Giang', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Bà Rịa - Vũng Tàu', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Bạc Liêu', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Bắc Kạn', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Bắc Ninh', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Bến Tre', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Bình Định', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Bình Dương', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Bình Phước', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Bình Thuận', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Cà Mau', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Cao Bằng', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Đắk Lắk', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Đắk Nông', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Điện Biên', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Đồng Nai', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Đồng Tháp', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Gia Lai', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Hà Giang', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Hà Nam', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Hà Tĩnh', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Hải Dương', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Hậu Giang', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Hòa Bình', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Hưng Yên', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Khánh Hòa', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Kiên Giang', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Kon Tum', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Lai Châu', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Lâm Đồng', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Lạng Sơn', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Lào Cai', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Long An', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Nam Định', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Nghệ An', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Ninh Bình', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Ninh Thuận', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Phú Thọ', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Quảng Bình', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Quảng Nam', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Quảng Ngãi', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Quảng Ninh', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Quảng Trị', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Sóc Trăng', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Sơn La', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Tây Ninh', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Thái Bình', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Thái Nguyên', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Thanh Hóa', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Thừa Thiên Huế', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Tiền Giang', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Trà Vinh', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Tuyên Quang', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Vĩnh Long', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Vĩnh Phúc', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Yên Bái', 'updated_at' => now(), 'created_at' => now()],
            ['content' => 'Phú Yên', 'updated_at' => now(), 'created_at' => now()],
        ]);
    }
}
