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
            'id' => 1,
            'name' => 'Delvina Wongsono',
            'first_name' => 'Delvina',
            'last_name' => 'Wongsono',
            'username' => 'dlvnaa',
            'email' => 'delvina@gmail.com',
            'password' => 'delvina123',
            'role' => 'user',
            'address' => 'Taman surya 5',
            'profile_picture' => 'images/profile/default.png',
        ]);

        User::insert([
            'id' => 2,
            'name' => 'Seventeen',
            'first_name' => 'Admin',
            'last_name' => 'Seventeen',
            'username' => 'seventeen',
            'email' => 'seventeen@17.com',
            'password' => 'seventeen',
            'role' => 'artist',
            'address' => 'South Korea',
            'profile_picture' => 'images/profile/default.png',
        ]);

        User::insert([
            'id' => 3,
            'name' => 'Coldplay',
            'first_name' => 'Admin',
            'last_name' => 'Coldplay',
            'username' => 'coldplay',
            'email' => 'cold@play.com',
            'password' => 'coldplay',
            'role' => 'artist',
            'address' => 'United Kingdom',
            'profile_picture' => 'images/profile/default.png',
        ]);
        User::insert([
            'id' => 4,
            'name' => 'Peter',
            'first_name' => 'Peter',
            'last_name' => 'Griffin',
            'username' => 'petah',
            'email' => 'petergriffin@gmail.com',
            'password' => 'evenatmyloisimstillafamilyguy',
            'role' => 'user',
            'address' => 'Quahog, Rhode Island',
            'profile_picture' => 'images/profile/default.png',
        ]);
    }
}
