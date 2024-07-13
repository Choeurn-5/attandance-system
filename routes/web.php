<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/abc', function () {
    return "test route";
});

Route::get('/test1', function () {
    return "test routeX from Rado";
});

