<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ketua', function () {
    return view('ketua');
});

Route::get('/Anggota', function () {
    return view('Anggota');
});
