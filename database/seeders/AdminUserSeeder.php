<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user if it doesn't exist
        User::firstOrCreate(
            ['email' => 'admin@ecosphere.com'],
            [
                'name' => 'Admin User',
                'username' => 'admin',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'eco_points' => 0,
                'eco_level' => 'Admin',
                'challenges_completed' => 0,
                'is_admin' => true,
            ]
        );

        // Create test user if it doesn't exist
        User::firstOrCreate(
            ['email' => 'user@ecosphere.com'],
            [
                'name' => 'Test User',
                'username' => 'testuser',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'eco_points' => 50,
                'eco_level' => 'Eco Warrior',
                'challenges_completed' => 2,
                'is_admin' => false,
            ]
        );
    }
}
