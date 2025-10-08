<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Anggota', function () {
    return view('Anggota');
});
Route::get('/ketua', function () {
    return view('ketua');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

