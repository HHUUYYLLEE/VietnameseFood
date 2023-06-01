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
            ['name' => 'Phở', 'updated_at' => now(), 'created_at' => now()],
            ['name' => 'Bún', 'updated_at' => now(), 'created_at' => now()],
            ['name' => 'Bánh mì', 'updated_at' => now(), 'created_at' => now()],
            ['name' => 'Cơm', 'updated_at' => now(), 'created_at' => now()],
            ['name' => 'Cháo', 'updated_at' => now(), 'created_at' => now()],
            ['name' => 'Bánh', 'updated_at' => now(), 'created_at' => now()],
            ['name' => 'Mì', 'updated_at' => now(), 'created_at' => now()],
            ['name' => 'Lẩu', 'updated_at' => now(), 'created_at' => now()],
            ['name' => 'Nước uống', 'updated_at' => now(), 'created_at' => now()],
            ['name' => 'Tráng miệng', 'updated_at' => now(), 'created_at' => now()],
            ['name' => 'Khác', 'updated_at' => now(), 'created_at' => now()],
            ['name' => 'Món ăn với cơm', 'updated_at' => now(), 'created_at' => now()],
        ];

        DB::table('dish_type')->insert($dish_types);
    }
}
