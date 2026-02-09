<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;





Route::get('/test', function () {
    return view('three');
});






Route::get('/', [TestController::class, 'index']);
Route::get('/store-session', [TestController::class, 'storeSession']);
Route::get('/delete-session', [TestController::class, 'deleteSession']);
