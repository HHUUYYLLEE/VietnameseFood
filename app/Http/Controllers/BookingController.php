<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $booking = $this->create($request->all());

        // Check if booking is created
        if ($booking) {
            return response()->json([
                'success' => true,
                'message' => 'Booking created successfully',
            ], 201);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Booking creation failed',
            ], 400);
        }
    }

    public function create(array $data)
    {
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

    // booking show

    public function show()
    {
        $user = Auth::user();
        $userId = $user->id;
        $restaurantId = DB::table('restaurants')
            ->where('user_id', '=', $userId)
            ->pluck('id');

        $bookings_confirming = DB::table('booking')
            ->whereIn('restaurant_id', $restaurantId)
            ->where('status', 0)
            ->join('users', 'booking.user_id', '=', 'users.id')
            ->get(['booking.*', 'users.*']);

        $bookings_confirmed = DB::table('booking')
            ->whereIn('restaurant_id', $restaurantId)
            ->whereIn('status', [1, -1])
            ->join('users', 'booking.user_id', '=', 'users.id')
            ->get(['booking.*', 'users.*']);

        var_dump($bookings_confirming, $bookings_confirmed);
        return view('booking.show', compact('bookings_confirming', 'bookings_confirmed'));
    }

    public function confirmBooking($id)
    {
        $booking = Booking::find($id);
        if (!$booking) {
            return response()->json(['success' => false, 'message' => 'Booking not found']);
        }

        $booking->status = 1;
        $booking->save();

        var_dump($booking);
        // Kiểm tra xem đã cập nhật thành công vào cơ sở dữ liệu hay chưa
        if ($booking->wasChanged('status')) {
            return response()->json(['success' => true, 'message' => 'Booking confirmed and updated in the database']);
        } else {
            return response()->json(['success' => true, 'message' => 'Booking confirmed but not updated in the database']);
        }
    }

    public function rejectBooking($id)
    {
        $affectedRows = DB::table('booking')
            ->where('id', $id)
            ->update(['status' => -1]);

        dd($affectedRows);
        // Kiểm tra xem đã cập nhật thành công vào cơ sở dữ liệu hay không
        if ($affectedRows > 0) {
            return response()->json(['success' => true, 'message' => 'Booking rejected and updated in the database']);
        } else {
            return response()->json(['success' => true, 'message' => 'Booking rejected but not updated in the database']);
        }
    }

    public function destroy($id)
    {
        $deletedRows = DB::table('booking')
            ->where('id', $id)
            ->delete();

        // Kiểm tra xem đã xóa thành công khỏi cơ sở dữ liệu hay không
        if ($deletedRows > 0) {
            return response()->json(['success' => true, 'message' => 'Booking deleted from the database']);
        } else {
            return response()->json(['success' => true, 'message' => 'Booking not found in the database']);
        }
    }
}
