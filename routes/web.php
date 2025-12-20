<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;

Route::view('/', 'welcome');

Route::group(['middleware' => 'patient'], function () {
    Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified', 'patient'])
        ->name('dashboard');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


Route::group(['middleware' => 'doctor'], function () {

    Route::get('/doctor/dashboard', [DoctorController::class, 'doctorDashboard'])
        ->name('doctor-dashboard');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'adminDashboard'])
        ->name('admin-dashboard');
});

require __DIR__ . '/auth.php';
