<?php

namespace Database\Seeders;
use App\Models\Membership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Membership::insert([
            'user_id' => 1,
            'membership_end' => '1 June 2023',
        ]);
    }
}
