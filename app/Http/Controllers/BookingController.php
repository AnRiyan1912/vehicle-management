<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Driver;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::query()
            ->orderBy('created_at', 'desc')
            ->paginate();
        return view('booking.index', ['bookings' => $bookings]);
    }

    public function create()
    {
        $userApprovals = User::query()
            ->where('role', 'APPROVAL')->get();
        $drivers = Driver::all();
        $vehicles = Vehicle::all();
        return view('booking.create')
            ->with('userApprovals', $userApprovals)
            ->with('drivers', $drivers)
            ->with('vehicles', $vehicles);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'user_id' => ['required'],
            'vehicle_id' => ['required'],
            'driver_id' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required']
        ]);
        $data['status'] = 'PENDING';
        Booking::create($data);
        return to_route('admin/booking')->with('message', 'Note was create');
    }
}
