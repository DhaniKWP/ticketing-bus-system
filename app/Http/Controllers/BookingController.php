<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Seat;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $buses = Bus::with('seats')->get(); // semua bus dan kursinya
        return view('booking.index', compact('buses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'seat_id' => 'required|exists:seats,id',
        ]);

        // Logic booking seat
    }
}
