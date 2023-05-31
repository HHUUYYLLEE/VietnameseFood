<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RestaurantMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 4; $i++) {
            for ($j = 1; $j <= 31; $j++) {
                $restaurant_menu[] = [
                    'DishID' => $j,
                    'RestaurantID' => $i,
                    'Price' => rand(10000, 500000),
                    'updated_at' => now(), 
                    'created_at' => now()
                ];
            }
        }

        DB::table('restaurant_menus')->insert($restaurant_menu);
    }
}
