<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CarController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('posts',[PostController::class,'index']);
    Route::get('post/{id}',[PostController::class,'show']);
    Route::post('posts',[PostController::class,'store']);
    Route::post('post/{id}',[PostController::class,'update']);
    Route::post('posts/{id}',[PostController::class,'destroy']);

});

// Route::get('posts',[PostController::class,'index'])->middleware('auth:api');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);    
});

//car
Route::get('cars',[CarController::class,'index'])->name('api.cars');
Route::get('addCar',[CarController::class,'create'])->name('api.addCar');
Route::post('storeCar',[CarController::class,'store'])->name('api.storeCar');
Route::get('editCar/{id}',[CarController::class,'edit'])->name('api.editCar');
Route::put('updateCar/{id}',[CarController::class,'update'])->name('api.updateCar');
Route::get('deleteCar/{id}',[CarController::class,'destroy'])->name('api.deleteCar');





