<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\TestingController;



Route::get('/',[studentController::class,'showStudents'])->name('home');

Route::get('/student/{id}',[studentController::class,'singleStudent'])->name('view.student');

Route::post('/add',[studentController::class,'addStudent'])->name('addStudent');

Route::put('/update/{id}',[studentController::class,'updateStudent'])->name('update.student');

Route::get('/updatePage/{id}',[studentController::class,'updatePage'])->name('update.page');

Route::get('/delete/{id}',[studentController::class,'deleteStudent'])->name('delete.student');

Route::view('newStudent','/addStudent');