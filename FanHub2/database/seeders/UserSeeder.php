<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Artists
        User::insert([
            'name' => 'Coldplay',
            'username' => 'Coldplay',
            'email' => 'coldplay@gmail.com',
            'password' => Hash::make('Coldplay123'),
            'role' => 'Artist',
            'address' => 'London, Britania Raya',
            'profilePicture' => "images/Coldplay/profile/1.jpg",
            'coverPicture' => "images/Coldplay/profile/1.jpg",
        ]);

        User::insert([
            'name' => 'Lyodora',
            'username' => 'Lyodora',
            'email' => 'Lyodora@gmail.com',
            'password' => Hash::make('Lyodora123'),
            'role' => 'Artist',
            'address' => 'Medan, North Sumatera',
            'profilePicture' => "images/Lyodora/profile/1.jpg",
            'coverPicture' => "images/Lyodora/profile/1.jpg",
        ]);

        User::insert([
            'name' => 'Seventeen',
            'username' => 'Seventeen',
            'email' => 'Seventeen@gmail.com',
            'password' => Hash::make('Seventeen123'),
            'role' => 'Artist',
            'address' => 'Seoul, Korea Selatan',
            'profilePicture' => "images/Seventeen/profile/1.jpg",
            'coverPicture' => "images/Seventeen/profile/1.jpg",
        ]);

        User::insert([
            'name' => 'Taylor Swift',
            'username' => 'Taylor Swift',
            'email' => 'Taylor_Swift@gmail.com',
            'password' => Hash::make('Taylor_Swift123'),
            'role' => 'Artist',
            'address' => 'West Reading, Pennsylvania',
            'profilePicture' => "images/Taylor Swift/profile/1.jpg",
            'coverPicture' => "images/Taylor Swift/profile/1.jpg",
        ]);

        User::insert([
            'name' => 'Treasure',
            'username' => 'Treasure',
            'email' => 'Treasure@gmail.com',
            'password' => Hash::make('Treasure123'),
            'role' => 'Artist',
            'address' => 'Seoul, Korea Selatan',
            'profilePicture' => "images/Treasure/profile/1.jpg",
            'coverPicture' => "images/Treasure/profile/1.jpg",
        ]);

        //Tes Account
        User::insert([
            'name' => 'Tes',
            'username' => 'Tes',
            'email' => 'Tes@gmail.com',
            'password' => Hash::make('Tes123'),
            'address' => 'Seoul, Korea Selatan',
        ]);
    }
}
