<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::insert([
            'name' => 'Delvina Wongsono',
            'first_name' => 'Delvina',
            'last_name' => 'Wongsono',
            'username' => 'dlvnaa',
            'email' => 'delvina@gmail.com',
            'password' => 'delvina123',
            'role' => 'user',
            'address' => 'Taman surya 5',
            'profile_picture' => '',
        ]);
    }
}
