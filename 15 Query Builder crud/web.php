<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\TestingController;



Route::get('/',[studentController::class,'showStudents'])->name('home');
Route::get('/student/{id}',[studentController::class,'singleStudent'])->name('view.student');
Route::get('/add',[studentController::class,'addStudent']);
Route::get('/update',[studentController::class,'updateStudent']);
Route::get('/delete/{id}',[studentController::class,'deleteStudent'])->name('delete.student');