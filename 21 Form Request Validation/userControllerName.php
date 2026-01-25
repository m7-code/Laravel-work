<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class userControllerName extends Controller
{
    public function addUser(UserRequest $req){
       
        // return $req->all();
 return $req->only(['name','age']);

    }
}
