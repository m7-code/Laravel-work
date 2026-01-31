<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;






// Route::view('/','/addUser');

// Route::post('/add',[userControllerName::class,"addUser"])->name('addUser');

// Route::resource('/',UserContoller::class);

// Route::resource('users',UserController::class);

Route::resource('test',TestController::class);