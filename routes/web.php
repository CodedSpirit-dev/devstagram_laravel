<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/store', function () {
    return view('store');
});


Route::get('/contact', function () {
    return view('contact');
});
