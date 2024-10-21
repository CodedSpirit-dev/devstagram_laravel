<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::get('authenticate', [RegisterController::class, ''])->name('');
