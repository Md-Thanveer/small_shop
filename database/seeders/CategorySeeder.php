<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Smartphones'],
            ['name' => 'Tablets'],
            ['name' => 'Laptops'],
            ['name' => 'Accessories'],
            ['name' => 'Wearables'],
            ['name' => 'Gaming'],
        ];

        foreach ($categories as $row) {
            Category::create($row);
        }
    }
}
