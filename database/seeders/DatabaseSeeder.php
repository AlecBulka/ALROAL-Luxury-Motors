<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Role::create([
            'role' => 'user',
            'description' => 'User'
        ]);

        Role::create([
            'role' => 'employee',
            'description' => 'Employee'
        ]);

        Role::create([
            'role' => 'admin',
            'description' => 'Admin'
        ]);
    }
}
