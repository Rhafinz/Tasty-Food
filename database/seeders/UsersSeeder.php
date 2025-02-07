<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Kehan',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin#123'),
            'isAdmin' => 1,
        ]);
    }
}
