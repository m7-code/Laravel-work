<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {

            $user = User::create([
                'name'  => fake()->name(),
                'email' => fake()->unique()->email(),
                'city'  => fake()->city(),
            ]);

            //  One-to-One profile
            $user->profile()->create([
                'phone'   => fake()->phoneNumber(),
                'address' => fake()->address(),
            ]);
        }
    }
}
