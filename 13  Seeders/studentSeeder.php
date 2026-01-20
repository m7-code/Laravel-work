<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // student::create([
        //     'name'  => 'Ali',
        //     'email' => 'ali@gmail.com',
        // ]);

        // student::create([
        //     'name'  => 'Ahmed',
        //     'email' => 'ahmed@gmail.com',
        // ]);

        // $students = collect([
        //     [
        //         'name'  => 'Ali',
        //         'email' => 'ali@gmail.com',
        //     ],
        //     [
        //         'name'  => 'Ahmed',
        //         'email' => 'ahmed@gmail.com',
        //     ],
        //     [
        //         'name'  => 'Usman',
        //         'email' => 'usman@gmail.com',
        //     ],
        // ]);
        // $students->each(function ($student) {
        //     student::create($student);
        // });

        for($i =1;$i<=10; $i++){
            student::create([
            'name'  => fake()->name(),
            'email' => fake()->unique()->email(),
        ]);
        }


        // student::create([
        //     'name'  => fake()->name(),
        //     'email' => fake()->unique()->email(),
        // ]);


    }
}
