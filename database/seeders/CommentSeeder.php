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
            for ($j = 1; $j <= 25; $j++) {
                $rand = rand(1, 5);
                if (rand(0, 10) < 8) {
                    if ($rand == 1) {
                        $comments[] = [
                            'user_id' => $i,
                            'restaurant_id' => $j,
                            'comment' => 'Rất Tệ',
                            'comment_date' => now(),
                            'rating' => $rand,
                            'image_url' => 'https://image.example.com/' . $i . '.jpg',
                            'date' => now(),
                            'updated_at' => now(),
                            'created_at' => now()
                        ];
                    } else if ($rand == 2) {
                        $comments[] = [
                            'user_id' => $i,
                            'restaurant_id' => $j,
                            'comment' => 'Không Ngon',
                            'comment_date' => now(),
                            'rating' => $rand,
                            'image_url' => 'https://image.example.com/' . $i . '.jpg',
                            'date' => now(),
                            'updated_at' => now(),
                            'created_at' => now()
                        ];
                    } else if ($rand == 3) {
                        $comments[] = [
                            'user_id' => $i,
                            'restaurant_id' => $j,
                            'comment' => 'Tạm được',
                            'comment_date' => now(),
                            'rating' => $rand,
                            'image_url' => 'https://image.example.com/' . $i . '.jpg',
                            'date' => now(),
                            'updated_at' => now(),
                            'created_at' => now()
                        ];
                    } else if ($rand == 4) {
                        $comments[] = [
                            'user_id' => $i,
                            'restaurant_id' => $j,
                            'comment' => 'Ngon',
                            'comment_date' => now(),
                            'rating' => $rand,
                            'image_url' => 'https://image.example.com/' . $i . '.jpg',
                            'date' => now(),
                            'updated_at' => now(),
                            'created_at' => now()
                        ];
                    } else if ($rand == 5) {
                        $comments[] = [
                            'user_id' => $i,
                            'restaurant_id' => $j,
                            'comment' => 'Rất Ngon',
                            'comment_date' => now(),
                            'rating' => $rand,
                            'image_url' => 'https://image.example.com/' . $i . '.jpg',
                            'date' => now(),
                            'updated_at' => now(),
                            'created_at' => now()
                        ];
                    }
                }
            }
        }
        DB::table('comments')->insert($comments);
    }
}
