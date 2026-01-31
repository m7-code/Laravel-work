<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tests = Test::all();
    return $tests;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
        [
            'name'  => 'Ali',
            'email' => 'ali@gmail.com',
            'city'  => 'Lahore',
        ],
        [
            'name'  => 'Ahmed',
            'email' => 'ahmed@gmail.com',
            'city'  => 'Karachi',
        ],
        [
            'name'  => 'Usman',
            'email' => 'usman@gmail.com',
            'city'  => 'Multan',
        ],
        [
            'name'  => 'Bilal',
            'email' => 'bilal@gmail.com',
            'city'  => 'Islamabad',
        ],
        [
            'name'  => 'Hamza',
            'email' => 'hamza@gmail.com',
            'city'  => 'Faisalabad',
        ],
    ];

    foreach ($data as $item) {
        Test::create([
            'meta_data' => $item,
        ]);
    }

    return " records inserted successfully";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
