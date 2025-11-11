<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/pengalaman', function () {
    return view('pengalaman');
});

Route::get('/kontak', function () {
    return view('kontak');
});