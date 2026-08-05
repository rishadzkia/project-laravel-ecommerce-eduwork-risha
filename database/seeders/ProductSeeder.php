<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop ASUS',
                'description' => 'Laptop untuk kebutuhan kerja dan kuliah.',
                'price' => 8500000,
                'stock' => 10,
                'image' => 'https://www.kucari.com/wp-content/uploads/2022/03/Laptop-Asus-A516MA-N40204GB256GB-SSD.jpeg',
                'product_category_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kaos Polos',
                'description' => 'Kaos polos berbahan cotton combed.',
                'price' => 120000,
                'stock' => 25,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxLtdhZigf4hQuBn3Yr3YKyuspqdZAKmR5NBM2-OwsKw&s=10',
                'product_category_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kopi Arabica',
                'description' => 'Biji kopi Arabica premium 250 gram.',
                'price' => 85000,
                'stock' => 50,
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRsnGLYggIJO84f-1aM5h8G-oabsLjwa-FTkTePtcarHg&s=10',
                'product_category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}