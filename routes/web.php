<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashmin/index');
});
Route::get('welcome', function () {
    return view('welcome');
});
