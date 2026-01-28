<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         for($i =1;$i<=10; $i++){
            user::create([
            'name'  => fake()->name(),
            'email' => fake()->unique()->email(),
            'city' => fake()->name(),
        ]);
        }
    }
}
