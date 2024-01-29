<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('addCar', function () {
        return view('admin.addCar');
    })->name('addCar');
    Route::get('addCategory', function () {
        return view('admin.addCategory');
    })->name('addCategory');
    Route::get('addTestimonials', function () {
        return view('admin.addTestimonials');
    })->name('addTestimonials');
    Route::get('addUser', function () {
        return view('admin.addUser');
    })->name('addUser');

    Route::get('cars', function () {
        return view('admin.cars');
    })->name('cars');
    Route::get('categories', function () {
        return view('admin.categories');
    })->name('categories');
    Route::get('testimonials', function () {
        return view('admin.testimonials');
    })->name('testimonials');
    Route::get('users', function () {
        return view('admin.users');
    })->name('users');
});