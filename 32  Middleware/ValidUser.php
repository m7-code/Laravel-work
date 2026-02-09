<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {

    //     echo "Middleware is working!"; // Debugging ke liye, check karne ke liye ke middleware call ho raha hai ya nahi
       

    //    if(Auth::check()) {
            
    //          return $next($request);
    //    } else {
    //         return redirect()->route('register');
    //    }
    // }

     public function handle(Request $request, Closure $next ,String $role = null): Response
    {

        echo "Middleware is working!"; // Debugging ke liye, check karne ke liye ke middleware call ho raha hai ya nahi
        // echo "Role: " . $role; // Debugging ke liye, role value check karne ke liye
        // return $next($request);
        
        if (!Auth::check()) {
    return redirect()->route('login');
}

if (Auth::user()->role !== $role) {
    abort(403);
}

return $next($request);

    //    if(Auth::check()) {
            
    //          return $next($request);
    //    } else {
    //         return redirect()->route('register');
    //    }

        
    }
}
