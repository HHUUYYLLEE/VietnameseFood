<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 20; $i++) {
            for ($j = 1; $j <= 4; $j++) {
                $rand = rand(1, 5);
                if ($rand == 1) {
                    $comments[] = [
                        'UserID' => $i,
                        'RestaurantID' => $j,
                        'Comment' => 'Rất Tệ',
                        'Comment_date' => now(),
                        'Rating' => $rand,
                        'Image_URL' => 'https://image.example.com/' . $i . '.jpg',
                        'Date' => now(),
                        'updated_at' => now(),
                        'created_at' => now()
                    ];
                } else if ($rand == 2) {
                    $comments[] = [
                        'UserID' => $i,
                        'RestaurantID' => $j,
                        'Comment' => 'Không Ngon',
                        'Comment_date' => now(),
                        'Rating' => $rand,
                        'Image_URL' => 'https://image.example.com/' . $i . '.jpg',
                        'Date' => now(),
                        'updated_at' => now(),
                        'created_at' => now()
                    ];
                } else if ($rand == 3) {
                    $comments[] = [
                        'UserID' => $i,
                        'RestaurantID' => $j,
                        'Comment' => 'Tạm được',
                        'Comment_date' => now(),
                        'Rating' => $rand,
                        'Image_URL' => 'https://image.example.com/' . $i . '.jpg',
                        'Date' => now(),
                        'updated_at' => now(),
                        'created_at' => now()
                    ];
                } else if ($rand == 4) {
                    $comments[] = [
                        'UserID' => $i,
                        'RestaurantID' => $j,
                        'Comment' => 'Ngon',
                        'Comment_date' => now(),
                        'Rating' => $rand,
                        'Image_URL' => 'https://image.example.com/' . $i . '.jpg',
                        'Date' => now(),
                        'updated_at' => now(),
                        'created_at' => now()
                    ];
                } else if ($rand == 5) {
                    $comments[] = [
                        'UserID' => $i,
                        'RestaurantID' => $j,
                        'Comment' => 'Rất Ngon',
                        'Comment_date' => now(),
                        'Rating' => $rand,
                        'Image_URL' => 'https://image.example.com/' . $i . '.jpg',
                        'Date' => now(),
                        'updated_at' => now(),
                        'created_at' => now()
                    ];
                }
            }
        }
        DB::table('comments')->insert($comments);
    }
}
