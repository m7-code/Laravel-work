<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserContoller;
use App\Http\Controllers\userControllerName;





// Route::view('/','/addUser');

// Route::post('/add',[userControllerName::class,"addUser"])->name('addUser');

Route::resource('users',UserContoller::class)->only([
    'create','update','show'
]);