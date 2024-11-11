<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoryController;

Route::get('/', function () {
    return view('dashmin/index');
});
Route::get('category', function () {
    return view('dashmin.addCategory');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::post("category",[categoryController::class,"addCategory"]);
// Route::get("viewCategories",function(){
//     return view('dashmin.categories');
// });
Route::get("viewCategories",[categoryController::class,"viewCategory"]);
?>