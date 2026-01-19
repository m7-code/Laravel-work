<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\TestingController;

// Route::get('/', function () {
//     return view('welcome');
// });

// route::get('/',[pageController::class,'showHome'])->name('home');
// route::get('/user/{id}',[pageController::class,'showUser'])->name('users');
// route::get('/blog',[pageController::class,'showBlog'])->name('blog');


//Group

Route::controller(pageController::class)->group(function()  {

    route::get('/','showHome')->name('home');
route::get('/user/{id}','showUser')->name('users');
route::get('/blog','showBlog')->name('blog');

});

// for single action controller

route::get('/test',TestingController::class);