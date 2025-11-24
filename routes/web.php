<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

// Admin Routes
Route::get('/dashboard', function() {
    return view('admin.index');
});

Route::get('/dashboard/events', function() {
    return view('admin.events');
});

Route::get('/dashboard/orders', function() {
    return view('admin.orders');
});

// Auth Routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('forgot-password');
