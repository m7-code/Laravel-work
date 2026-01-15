<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';

// Route::get('/post', function () {
//     return view('post');
// });

// Route::get('/hello', function () {
//     return view('post');
// });

Route::get('/post/firstPost', function () {
    return view('firstPost');
});

// Route::get('/post/{id?}', function (?string $id=null) {
//     if($id){
//         return "<h1>post id : ".$id."</h1>";

//     }else{
//         return "<h1>no id found</h1>";

//     }
   
// });


//constraints

// whereNumber() for numaric values
// whereAlpha() for alphabatic values
// whereAlphaNumeric() 
// whereIn() khod sy create karne ka leye
// where() 

Route::get('/post/{id?}', function (?string $id=null) {
    if($id){
        return "<h1>post id : ".$id."</h1>";

    }else{
        return "<h1>no id found</h1>";

    }
   
})->whereNumber('id');


Route::get('/post/{id?}/comment/{commentid?}', function (?string $id=null,?string $commentid=null ) {
    if($id){
        return "<h1>post id : ".$id."</h1><h2>".$commentid."</h2>";

    }else{
        return "<h1>no id found</h1>";

    }
   
});