<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index']);
Route::get('/profil', [PageController::class, 'profil']);
Route::get('/pengalaman', [PageController::class, 'pengalaman']);
Route::get('/kontak', [PageController::class, 'kontak']);
