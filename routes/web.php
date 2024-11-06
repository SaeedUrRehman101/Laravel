<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashmin/index');
});
Route::get('category', function () {
    return view('dashmin.category');
});
Route::get('welcome', function () {
    return view('welcome');
});

?>