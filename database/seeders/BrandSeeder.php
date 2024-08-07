<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'Apple'],
            ['name' => 'Samsung'],
            ['name' => 'Sony'],
            ['name' => 'Huawei'],
            ['name' => 'Dell'],
            ['name' => 'Asus'],
        ];

        foreach ($brands as $row) {
            Brand::create($row);
        }
    }
}
