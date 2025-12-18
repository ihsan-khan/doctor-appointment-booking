<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::group(['middleware' => 'patient'], function(){
    Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified','patient'])
    ->name('dashboard');

});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
