<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'CURSOS',
            'image' => 'https://dummyimage.com/200x150/5c5756/0011ff'
        ]);
        Category::create([
            'name' => 'Aceite',
            'image' => 'https://dummyimage.com/200x150/5c5756/0011ff'
        ]);
        Category::create([
            'name' => '-llaves',
            'image' => 'https://dummyimage.com/200x150/5c5756/0011ff'
        ]);
        Category::create([
            'name' => 'Llantas',
            'image' => 'https://dummyimage.com/200x150/5c5756/0011ff'
        ]);
    }
}
