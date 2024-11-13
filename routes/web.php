<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;

Route::get('/', function () {
    return view('dashmin/index');
});
Route::get('category', function () {
    return view('dashmin.addCategory');
});
Route::view('welcome','welcome'); //shorter syntax
Route::post("category",[categoryController::class,"addCategory"]);
Route::get("viewCategories",[categoryController::class,"viewCategory"]);
Route::post('update',[categoryController::class,'updateCategory']);
Route::get('catedelete.{id}',[categoryController::class,'deleteCategory']);
?>