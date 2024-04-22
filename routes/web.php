<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    if (Auth::check() & Auth::user()->role == 'ADMIN') {
        return redirect()->route('admin/dashboard');
    } else if (Auth::check() & Auth::user()->role == 'APPROVAL') {
        return redirect()->route('approval/dashboard');
    } else {
        return view('welcome');
    }
});

Route::middleware('auth', 'ADMIN')->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin/dashboard');
    Route::get('admin/driver', [DriverController::class, 'index'])->name('admin/driver');
    Route::get('admin/vehicle', [VehicleController::class, 'index'])->name('admin/vehicle');
    Route::get('admin/booking', [BookingController::class, 'index'])->name('admin/booking');
    Route::get('admin/booking/create', [BookingController::class, 'create'])->name('admin/booking/create');
    Route::post('admin/booking/store', [BookingController::class, 'store'])->name('admin/booking/store');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('approval/dashboard', [DashboardController::class, 'indexApproval'])->name('approval/dashboard');
});

require __DIR__ . '/auth.php';
