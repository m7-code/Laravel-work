<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('profile')->get();

        return view('home', compact('users'));
    }

    public function create()
    {
        return view('adduser');
    }

    public function store(Request $request)
    {
        $user = new User;

        $user->name = $request->username;
        $user->email = $request->useremail;
        $user->city = $request->usercity;

        $user->save();
        $user->profile()->create([
    'phone'   => $request->phone,
    'address' => $request->address,
]);


        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        $users = $user;
        return view('viewuser', compact('users'));
    }

    public function edit(User $user)
    {
        $users = $user;
        return view('updateuser', compact('users'));

         

    }

    public function update(Request $request,User $user)
    {
       

        $user->name = $request->username;
        $user->email = $request->useremail;
        $user->city = $request->usercity;

        $user->save();
        $user->profile()->updateOrCreate(
    ['user_id' => $user->id],
    [
        'phone'   => $request->phone,
        'address' => $request->address,
    ]
);


          return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
          $user->delete();
        return redirect()->route('users.index');
    }
}
