<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // I use firstOrCreate() method to create a new admin user.
        User::firstOrCreate(
            ['email' => 'admin@futurebridge.com'], // THE UNIQUE IDENTIFIER.
            [
                'name' => 'Administrator',
                'password' => Hash::make('EITSJANGANKepoYaa12345!'), // I ALWAYS USE HASH PASSWORDS.
                'is_admin' => true, // GRANTS FULL Backend Access.
            ]
        );
    }
}
