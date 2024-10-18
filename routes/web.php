<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/store', function () {
    return view('store');
});


Route::get('/contact', function () {
    return view('contact');
});