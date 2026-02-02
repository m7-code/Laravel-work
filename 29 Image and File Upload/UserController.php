<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
        return view('file-upload', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('photo');
        
        $request->validate([
            'photo' => 'required|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('photo')->store('image', 'public');

        User::create([
            'file-name' => $path,
        ]);

        return redirect()->route('user.index')
            ->with('status', 'Photo uploaded successfully. Path: ' . $path);




    //     if ($file) {
    //         $path = $file->store('photos', 'public');
    //         session(['image_path' => $path]);
    //         session(['success' => 'Photo uploaded successfully']);
    //     }
    //     return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
