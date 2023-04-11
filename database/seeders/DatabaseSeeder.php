<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory()->create([
            'name' => 'Admin',
            'induk' => '12345',
            'password' => bcrypt('password'),
            'is_admin' => 1
        ]);

        User::factory()->create([
            'name' => 'User',
            'induk' => '67890',
            'password' => bcrypt('password'),
        ]);
    }
}
