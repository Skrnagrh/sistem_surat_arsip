<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    public function run()
    {
        // Seed data for admin user
        User::create([
            'name' => 'Admin',
            'induk' => '12345',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'User',
            'induk' => '12346',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);
        User::create([
            'name' => 'User Lain',
            'induk' => '12347',
            'password' => Hash::make('password'),
            'is_admin' => false,
        ]);
    }
}
