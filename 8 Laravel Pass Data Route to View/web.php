<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/test', function () {
    return view('test');
});

//  Pass Data Route to View 

// Route::get('/users', function () {
//     return view('users',['user'=>'Mug']);
// });

// Route::get('/users', function () {
//     $name = 'vki';                    
//     $city = 'Multan';
//     return view('users',['user'=>$name,'city'=>$city]);
    
    
// });
  

//for array

function getUsers(){
    return  [
        1 =>['name'=>'vki','city'=>'multan'],
        2 =>['name'=>'vki1','city'=>'multan'],
        3 =>['name'=>'vki2','city'=>'multan']
    ];   
}

Route::get('/users', function () {
                     
    $names = getUsers();
    return view('users',['user'=>$names]);
    
    
});

Route::get('/user/{id}', function ($id) {
    $users = getUsers();
    abort_if(!isset($users[$id]), 404);
    $user = $users[$id];


    return view('user',['id'=>$user]);
})->name('view.user');