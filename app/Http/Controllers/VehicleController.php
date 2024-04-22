<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::query()
            ->orderBy('created_at', 'desc')
            ->paginate();
        return view('vehicle.index', ['vehicles' => $vehicles]);
    }
}
