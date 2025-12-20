<?php

use Illuminate\Support\Facades\Route;

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

    Route::get('/doctor/dashboard', [DoctorController::class, 'loadDoctorDashboard'])
        ->name('doctor-dashboard');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'loadAdminDashboard'])
        ->name('admin-dashboard');
});

require __DIR__ . '/auth.php';
