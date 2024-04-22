<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function indexApproval()
    {
        $bookings = Booking::query()
            ->where('status', 'PENDING')
            ->orderBy('created_at', 'desc')
            ->paginate();
        return view('dashboard')->with('bookings', $bookings);
    }
}
