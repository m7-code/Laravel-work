<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\TestingController;



Route::get('/',[studentController::class,'showStudents'])->name('home');

