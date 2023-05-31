<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
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
                $bookings[] = [
                    'UserID' => $i,
                    'RestaurantID' => $j,
                    'Booking_date_time' => now(),
                    'Number_of_people' => rand(1, 10),
                    'Status' => rand(0, 1),
                    'updated_at' => now(),
                    'created_at' => now(),
                ];
            }
        }
        DB::table('booking')->insert($bookings);
    }
}
