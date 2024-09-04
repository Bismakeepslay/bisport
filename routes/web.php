<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('content');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/my_project', function () {
    return view('projects');
});

Route::get('/favorites', function () {
    return view('favorites');
});
