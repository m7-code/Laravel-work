<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $value = session('name');
        echo "Session value: " . $value;
    }
      public function storeSession()
    {
        session(['name' => 'John Doe']);
        session()->regenerate();
        return redirect('/')->with('success', 'Session value stored successfully!');
    }
      public function deleteSession()
    {
        session()->forget('name');
        return redirect('/')->with('success', 'Session value deleted successfully!');

    }
}
