<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('addCar', function () {
        return view('admin.addCar');
    });
    Route::get('addCategory', function () {
        return view('admin.addCar');
    });
});