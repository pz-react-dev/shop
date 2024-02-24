<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Akcesoria'],
            ['name' => 'AirPods'],
            ['name' => 'Apple Watch'],
            ['name' => 'Mac'],
        ];

        ProductCategory::insert($data);
    }
}
