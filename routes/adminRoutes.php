<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CarController;

Route::prefix('admin')->group(function () {

    //category
    Route::get('categories',[CategoryController::class,'index'])->name('categories');
    Route::get('addCategory',[CategoryController::class,'create'])->name('addCategory');
    Route::post('storeCategory',[CategoryController::class,'store'])->name('storeCategory');
    Route::get('editCategory/{id}',[CategoryController::class,'edit'])->name('editCategory');
    Route::put('updateCategory/{id}',[CategoryController::class,'update'])->name('updateCategory');
    Route::get('deleteCategory/{id}',[CategoryController::class,'destroy'])->name('deleteCategory');

    //car
    Route::get('cars',[CarController::class,'index'])->name('cars');
    Route::get('addCar',[CarController::class,'create'])->name('addCar');
    Route::post('storeCar',[CarController::class,'store'])->name('storeCar');
    Route::get('editCar/{id}',[CarController::class,'edit'])->name('editCar');
    Route::put('updateCar/{id}',[CarController::class,'update'])->name('updateCar');
    Route::get('deleteCar/{id}',[CarController::class,'destroy'])->name('deleteCar');



    Route::get('addTestimonial', function () {
        return view('admin.addTestimonial');
    })->name('addTestimonial');
    Route::get('addUser', function () {
        return view('admin.addUser');
    })->name('addUser');

    Route::get('testimonials', function () {
        return view('admin.testimonials');
    })->name('allTestimonials');
    Route::get('users', function () {
        return view('admin.users');
    })->name('users');
    Route::get('messages', function () {
        return view('admin.messages');
    })->name('messages');

    Route::get('editTestimonial', function () {
        return view('admin.editTestimonial');
    })->name('editTestimonial');
    Route::get('editUser', function () {
        return view('admin.editUser');
    })->name('editUser');

    Route::get('showMessage', function () {
        return view('admin.showMessage');
    })->name('showMessage');

});