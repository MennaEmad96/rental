<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;

Route::prefix('admin')->group(function () {
    Auth::routes(['verify'=>true]);
});

Route::group(['prefix' => 'admin',  'middleware' => ['verified']], function(){
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

    //testimonial
    Route::get('testimonials',[TestimonialController::class,'index'])->name('allTestimonials');
    Route::get('addTestimonial',[TestimonialController::class,'create'])->name('addTestimonial');
    Route::post('storeTestimonial',[TestimonialController::class,'store'])->name('storeTestimonial');
    Route::get('editTestimonial/{id}',[TestimonialController::class,'edit'])->name('editTestimonial');
    Route::put('updateTestimonial/{id}',[TestimonialController::class,'update'])->name('updateTestimonial');
    Route::get('deleteTestimonial/{id}',[TestimonialController::class,'destroy'])->name('deleteTestimonial');

    //user
    Route::get('users',[UserController::class,'index'])->name('users');
    Route::get('addUser',[UserController::class,'create'])->name('addUser');
    Route::post('storeUser',[UserController::class,'store'])->name('storeUser');
    Route::get('editUser/{id}',[UserController::class,'edit'])->name('editUser');
    Route::put('updateUser/{id}',[UserController::class,'update'])->name('updateUser');

    //message
    Route::get('messages',[MessageController::class,'index'])->name('messages');
    Route::get('showMessage/{id}',[MessageController::class,'show'])->name('showMessage');
    Route::get('deleteMessage/{id}',[MessageController::class,'destroy'])->name('deleteMessage');

});