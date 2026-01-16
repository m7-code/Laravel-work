<?php

use Illuminate\Support\Facades\Route;



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';



// named route

Route::get('/', function () {
    return view('welcome');
})->name('myhome');

Route::get('/post', function () {
    return view('post');
})->name('mypost');

// Route::get('/about', function () {
//     return view('about');
// })->name('myabout');

Route::get('/test', function () {
    return view('about');
})->name('myabout');

Route::redirect('/about', '/test', 301);

//route group

// route::prefix('page')->group(function(){

// Route::get('/post', function () {    // es ma comman page ha 
//     return view('welcome');
// })->name('myhome');

// Route::get('/firstpost', function () {
//     return view('post');
// })->name('mypost');

// });

route::fallback(function(){
    return "<h1>page not found</h1>";
});