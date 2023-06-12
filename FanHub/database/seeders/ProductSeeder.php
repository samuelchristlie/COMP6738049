<?php

namespace Database\Seeders;
use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Products::insert([
            'type' => 'Coming Soon',
            'product_name' => 'Can Badge',
            'description' => 'Seventeen members have donned uniforms for these can badges and they look dazzling!',
            'price' => 68000,
            'status_product' => 'Pre-order 25/07/2023 ~ 01/08/2023',
            'product_image' => '',
        ]);

        Products::insert([
            'type' => 'Coming Soon',
            'product_name' => 'Premium Photo',
            'description' => 'Check out the premium photos - members standing againts the rose quartz background!',
            'price' => 103000,
            'status_product' => 'Pre-order 25/07/2023 ~ 01/08/2023',
            'product_image' => '',
        ]);
    }
}
