<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Anggota', function () {
    return view('Anggota');
});
Route::get('/ketua', function () {
    return view('ketua');
});


