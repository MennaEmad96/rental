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
    Route::get('messages', function () {
        return view('admin.messages');
    })->name('messages');

    Route::get('editCar', function () {
        return view('admin.editCar');
    })->name('editCar');
    Route::get('editCategory', function () {
        return view('admin.editCategory');
    })->name('editCategory');
    Route::get('editTestimonial', function () {
        return view('admin.editTestimonial');
    })->name('editTestimonial');
    Route::get('editUser', function () {
        return view('admin.editUser');
    })->name('editUser');

    Route::get('showMessage', function () {
        return view('admin.showMessage');
    })->name('showMessage');

    Route::get('login', function () {
        return view('admin.login');
    })->name('login');
});