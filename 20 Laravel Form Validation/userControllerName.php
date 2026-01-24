<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userControllerName extends Controller
{
    public function addUser(Request $req){
        $req->validate([
        'name'=>'required',
        'email'=>'required|email',
        'age'=>'required|numeric|min:18',
        ],[
            "name.required"=>'error'
        ]);
        return $req->all();
    }
}
