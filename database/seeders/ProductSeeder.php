<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'iPhone 14 Pro',
                'price' => 999.99,
                'category_id' => Category::where('name', 'Smartphones')->first()->id,
                'brand_id' => Brand::where('name', 'Apple')->first()->id,
                'qty' => 50,
                'alert_stock' => 10,
            ],
            [
                'name' => 'Galaxy S23 Ultra',
                'price' => 1199.99,
                'category_id' => Category::where('name', 'Smartphones')->first()->id,
                'brand_id' => Brand::where('name', 'Samsung')->first()->id,
                'qty' => 30,
                'alert_stock' => 5,
            ],
            [
                'name' => 'Sony WH-1000XM4',
                'price' => 349.99,
                'category_id' => Category::where('name', 'Accessories')->first()->id,
                'brand_id' => Brand::where('name', 'Sony')->first()->id,
                'qty' => 100,
                'alert_stock' => 20,
            ],
            [
                'name' => 'Huawei MatePad Pro',
                'price' => 499.99,
                'category_id' => Category::where('name', 'Tablets')->first()->id,
                'brand_id' => Brand::where('name', 'Huawei')->first()->id,
                'qty' => 40,
                'alert_stock' => 8,
            ],
            [
                'name' => 'Dell XPS 13',
                'price' => 1099.99,
                'category_id' => Category::where('name', 'Laptops')->first()->id,
                'brand_id' => Brand::where('name', 'Dell')->first()->id,
                'qty' => 25,
                'alert_stock' => 5,
            ],
            [
                'name' => 'Asus ROG Phone 6',
                'price' => 899.99,
                'category_id' => Category::where('name', 'Gaming')->first()->id,
                'brand_id' => Brand::where('name', 'Asus')->first()->id,
                'qty' => 15,
                'alert_stock' => 3,
            ],
        ];

        foreach ($products as $row) {
            Product::create($row);
        }
    }
}
