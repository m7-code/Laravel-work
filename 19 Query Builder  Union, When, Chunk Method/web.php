<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\TestingController;



Route::get('/',[studentController::class,'showStudents'])->name('home');

Route::get('/union',[studentController::class,'uniondata']);

Route::get('/chunk',[studentController::class,'chunckdata']);

