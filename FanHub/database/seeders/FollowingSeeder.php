<?php

namespace Database\Seeders;
use App\Models\Following;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FollowingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Following::insert([
            'user_id' => 1,
            // 'artist_id' => 5,
        ]);
    }
}
