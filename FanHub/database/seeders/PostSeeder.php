<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Post::insert([
            'user_id' => 1,
            'content' => 'Terima kasih atas kerja keras hari ini~',
            'post_date' => '14/06/2023',
        ]);

        Post::insert([
            'user_id' => 1,
            'content' => 'Jangan lupa makan~',
            'post_date' => '12/07/2023',
        ]);
    }
}
