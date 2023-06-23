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
            'username' => 'coldplay',
            'email' => 'coldplay@gmail.com',
            'verify' => true,
            'password' => Hash::make('Coldplay123'),
            'role' => 'Artist',
            'verify' => true,
            'address' => 'London, Britania Raya',
            'profilePicture' => "images/Coldplay/profile/1.jpg",
            'coverPicture' => "images/Coldplay/profile/1.jpg",
        ]);

        User::insert([
            'name' => 'Lyodra',
            'username' => 'lyodra',
            'verify' => true,
            'email' => 'Lyodra@gmail.com',
            'password' => Hash::make('Lyodra123'),
            'role' => 'Artist',
            'verify' => true,
            'address' => 'Medan, North Sumatera',
            'profilePicture' => "images/Lyodra/profile/1.jpg",
            'coverPicture' => "images/Lyodra/profile/1.jpg",
        ]);

        User::insert([
            'name' => 'Seventeen',
            'username' => 'seventeen',
            'email' => 'Seventeen@gmail.com',
            'password' => Hash::make('Seventeen123'),
            'role' => 'Artist',
            'verify' => true,
            'address' => 'Seoul, Korea Selatan',
            'profilePicture' => "images/Seventeen/profile/1.jpg",
            'coverPicture' => "images/Seventeen/profile/1.jpg",
        ]);

        User::insert([
            'name' => 'Taylor Swift',
            'username' => 'taylorswift',
            'email' => 'Taylor_Swift@gmail.com',
            'password' => Hash::make('Taylor_Swift123'),
            'role' => 'Artist',
            'verify' => true,
            'address' => 'West Reading, Pennsylvania',
            'profilePicture' => "images/TaylorSwift/profile/1.jpg",
            'coverPicture' => "images/TaylorSwift/profile/1.jpg",
        ]);

        User::insert([
            'name' => 'Treasure',
            'username' => 'treasure',
            'email' => 'Treasure@gmail.com',
            'password' => Hash::make('Treasure123'),
            'role' => 'Artist',
            'verify' => true,
            'address' => 'Seoul, Korea Selatan',
            'profilePicture' => "images/Treasure/profile/1.jpg",
            'coverPicture' => "images/Treasure/profile/1.jpg",
        ]);

        //Admin Account
        User::insert([
            'name' => 'Admin',
            'username' => 'Admin',
            'role' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('Admin123'),
            'address' => 'Anonymous',
        ]);

        //Test Account
        User::insert([
            'name' => 'Test',
            'username' => 'Test',
            'email' => 'Test@gmail.com',
            'password' => Hash::make('Test123'),
            'address' => 'Test',
        ]);
    }
}
