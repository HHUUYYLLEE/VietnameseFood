<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $booking = $this->create($request->all());

        // Check if booking is created
        if($booking){
            return response()->json([
                'success' => true,
                'message' => 'Booking created successfully',
            ], 201);
        }
        else {
            return response()->json([
                'success' => false,
                'message' => 'Booking creation failed',
            ], 400);
        }
    }
    
    public function create(array $data){
        return Booking::create([
            'user_id' => $data['user_id'],
            'restaurant_id' => $data['restaurant_id'],
            'number_of_people' => $data['number_of_people'],
            'booking_date_time' => $data['booking_date_time'],
            'status' => 0
        ]);
    }
}
