<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'username' => 'admin', // Username untuk login
            'password' => Hash::make('admin123'), // Kata sandi yang terenkripsi
            'role' => 'admin', // Role admin
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
