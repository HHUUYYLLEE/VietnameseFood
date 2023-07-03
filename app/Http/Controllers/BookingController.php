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
    public function history()
    {
        $user = auth()->user();
        $booking = $user->bookings->sortByDesc('status');
        $data = [];
        foreach ($booking as $item) {
            //change format date 'Y年m月d日 H:i:s'
            $item->booking_date_time = date('Y年m月d日 H:i:s', strtotime($item->booking_date_time));
            $item->created_at_tmp = date('Y年m月d日 H:i:s', strtotime($item->created_at));
            $data[] = (object) [
                'id' => $item->id,
                'restaurant_id' => $item->restaurant_id,
                'restaurant_name' => $item->restaurant->name,
                'booking_date' => explode(' ', $item->booking_date_time)[0],
                'booking_time' => explode(' ', $item->booking_date_time)[1],
                'number_of_people' => $item->number_of_people,
                'status' => $item->status,
                'create_date' => explode(' ', $item->created_at_tmp)[0],
                'create_time' => explode(' ', $item->created_at_tmp)[1],
            ];
        }
        return view('booking.history', compact('data'));
    }
}
