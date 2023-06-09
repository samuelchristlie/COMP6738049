<?php

namespace Database\Seeders;
use App\Models\Chats;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Chats::insert([
            'from' => 'Delvina',
            'to' => 'seventeen',
            'content_chats' => 'Kapan nih mau world tour keliling Indonesia? :)',
            'chats_date' => '2023/06/10',
        ]);
    }
}
