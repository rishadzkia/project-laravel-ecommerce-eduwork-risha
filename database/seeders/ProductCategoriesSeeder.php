<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_categories')->insert([
            [
                'name' => 'Electronics',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fashion',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Food & Beverage',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}