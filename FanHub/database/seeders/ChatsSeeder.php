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
            'from' => 1,
            'to' => 2,
            'content' => 'Kapan nih mau world tour keliling Indonesia? :)',
            'sent_date' => '2023/06/10',
        ]);

        Chats::insert([
            'from' => 1,
            'to' => 3,
            'content' => 'Kapan nih mau world tour keliling Indonesia? :)',
            'sent_date' => '2023/06/10',
        ]);

        Chats::insert([
            'from' => 4,
            'to' => 1,
            'content' => 'Hai Delvina',
            'sent_date' => '2023/06/10',
        ]);
    }
}
