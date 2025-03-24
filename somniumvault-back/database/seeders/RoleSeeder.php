<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Create roles
        $roles = [
            [
                'name' => 'admin',
                'slug' => 'admin',
                'description' => 'Admin',
            ],
            [
                'name' => 'user',
                'slug' => 'user',
                'description' => 'User',
            ],
        ];

        foreach ($roles as $role) {
            \App\Models\Role::create($role);
        }
    }
}
