<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DishTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dish_types = [
            ['Name' => 'Phở', 'updated_at' => now(), 'created_at' => now()],
            ['Name' => 'Bún', 'updated_at' => now(), 'created_at' => now()],
            ['Name' => 'Bánh mì', 'updated_at' => now(), 'created_at' => now()],
            ['Name' => 'Cơm', 'updated_at' => now(), 'created_at' => now()],
            ['Name' => 'Cháo', 'updated_at' => now(), 'created_at' => now()],
            ['Name' => 'Bánh', 'updated_at' => now(), 'created_at' => now()],
            ['Name' => 'Mì', 'updated_at' => now(), 'created_at' => now()],
            ['Name' => 'Lẩu', 'updated_at' => now(), 'created_at' => now()],
            ['Name' => 'Nước uống', 'updated_at' => now(), 'created_at' => now()],
            ['Name' => 'Tráng miệng', 'updated_at' => now(), 'created_at' => now()],
            ['Name' => 'Khác', 'updated_at' => now(), 'created_at' => now()],
            ['Name' => 'Món ăn với cơm', 'updated_at' => now(), 'created_at' => now()],
        ];

        DB::table('dish_type')->insert($dish_types);
    }
}
