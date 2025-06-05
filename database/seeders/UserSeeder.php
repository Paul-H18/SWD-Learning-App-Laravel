<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        User::query()->create([
            'firstname' => 'Linas',
            'lastname' => 'Mendoza',
            'email' => 'admin@ort-online.net',
            'password' => Hash::make('admin'),
            'email_verified_at' => now(),
        ]);

        for ($i = 0; $i < 25; $i++) {
            User::query()->create([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'password' => Hash::make('admin'),
                'email_verified_at' => now(),
            ]);
        }

    }
}
