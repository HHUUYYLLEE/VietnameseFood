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
            ['name' => 'Bún', 'updated_at' => now(), 'created_at' => now()],
            ['name' => 'Phở', 'updated_at' => now(), 'created_at' => now()],
            ['name' => 'Bánh mì', 'updated_at' => now(), 'created_at' => now()],
            ['name' => 'Cơm', 'updated_at' => now(), 'created_at' => now()],

        ];

        DB::table('dish_type')->insert($dish_types);
    }
}
