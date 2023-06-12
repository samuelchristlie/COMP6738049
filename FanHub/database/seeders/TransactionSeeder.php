<?php

namespace Database\Seeders;
use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Transaction::insert([
            'product_id' => 2,
            'user_id' => 1,
            'quantity' => 5,
            'payment_method' => 'ovo',
            'price' => 103000,
            'address' => 'Taman surya 5',
        ]);
    }
}
