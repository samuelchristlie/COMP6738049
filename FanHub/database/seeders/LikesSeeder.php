<?php

namespace Database\Seeders;
use App\Models\Likes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Likes::insert([
            'user_id' => 1,
            'post_id' => 1,
        ]);
    }
}
