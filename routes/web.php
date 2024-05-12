<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::fallback(PageController::class)->name('404');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
