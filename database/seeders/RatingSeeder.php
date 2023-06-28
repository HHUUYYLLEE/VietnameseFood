<?php

namespace Database\Seeders;

use App\Models\Restaurant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = Restaurant::all();
        foreach ($restaurants as $restaurant) {
            $comments = $restaurant->comments;
            $rating = $comments->avg('rating');
            $restaurant->rating = $rating;
            DB::table('restaurants')->where('id', $restaurant->id)->update(['rating_avg' => $rating]);
        }
    }
}
