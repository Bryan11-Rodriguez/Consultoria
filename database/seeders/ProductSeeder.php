<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
USE App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Agua',
            'cost' => '300',
            'price' => '1000',
            'barcode' => '3653333333',
            'stock' => '155',
            'alerts' => '10',
            'category_id' => 1,
            'image' => 'solumaq.png'
        ]);
        Product::create([
            'name' => 'Aceite',
            'cost' => '3020',
            'price' => '10800', 
            'barcode' => '362253333333',
            'stock' => '155',
            'alerts' => '10',
            'category_id' => 2,
            'image' => 'solumaq.png'
        ]);
        Product::create([
            'name' => 'Bolsa',
            'cost' => '3000',
            'price' => '10004',
            'barcode' => '369953333333',
            'stock' => '105',
            'alerts' => '160',
            'category_id' => 3,
            'image' => 'solumaq.png'
        ]);
    }
}
