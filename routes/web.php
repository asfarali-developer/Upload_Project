<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AboutController;
/*
/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/',[StudentController::class,'index'])->name('index');
// Route::post('/',[StudentController::class,'create'])->name('create');
Route::get('/',[RoomController::class,'index'])->name('index');
Route::post('/',[RoomController::class,'create'])->name('create');
Route::get('/edit/{id}',[RoomController::class,'edit'])->name('edit');
Route::post('/edit/{id}',[RoomController::class,'update'])->name('update');
Route::get('/delete/{id}',[RoomController::class,'destroy'])->name('destroy');


Route::get('/booking',[BookingController::class,'index']);
Route::post('/booking',[BookingController::class,'create']);
Route::get('/booking/edit/{id}',[BookingController::class,'edit']);
Route::post('/booking/edit/{id}',[BookingController::class,'update']);
Route::get('/booking/delete/{id}',[BookingController::class,'destroy']);


Route::get('/about',[AboutController::class,'index']);