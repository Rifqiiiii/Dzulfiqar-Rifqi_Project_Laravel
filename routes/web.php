<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome'); // ke halaman welcome.blade.php
});

Route::get('/index', function () {
    return view('index'); // ke halaman index.blade.php
});

Route::get('/', function () {
    return view('login'); // ke halaman login.blade.php
});

Route::get('/about', function () {
    return view('about'); // ke halaman about.blade.php
});