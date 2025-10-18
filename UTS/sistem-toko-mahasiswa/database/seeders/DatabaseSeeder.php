<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin',
            'email' => 'admin@uts.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);

        // Create regular user
        User::create([
            'name' => 'Student',
            'email' => 'student@uts.com', 
            'password' => bcrypt('password'),
            'is_admin' => false,
        ]);

        $this->call(CourseSeeder::class);
    }
}