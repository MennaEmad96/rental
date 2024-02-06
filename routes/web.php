<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\MessageController;


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

//page routes
Route::get('index',[PageController::class,'index'])->name('index');
Route::get('about',[PageController::class,'about'])->name('about');
Route::get('blog',[PageController::class,'blog'])->name('blog');
Route::get('listing/{id?}',[PageController::class,'listing'])->name('listing');
Route::post('listingSearch',[PageController::class,'listingSearch'])->name('listingSearch');
Route::get('contact',[PageController::class,'contact'])->name('contact');
Route::post('storeMessage',[MessageController::class,'store'])->name('storeMessage');
Route::get('testimonials',[PageController::class,'testimonials'])->name('testimonials');
Route::get('single/{id}',[PageController::class,'single'])->name('single');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('logout', [LoginController::class,'logout'])->name('logout');
// Route::get('logout', function () {
//     return redirect('admin/login');
// })->name('logout');
