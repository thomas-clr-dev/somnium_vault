<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create admin
        $admin = \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin'),
            'role_id' => 1,
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);

        //Create user
        $user = \App\Models\User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user'),
            'role_id' => 2,
            'remember_token' => \Illuminate\Support\Str::random(10),
        ]);

    }
}
