<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Denomination;

class DenomationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Denomination::create([
            'type' => 'DOLAR',
            'value' => 100,
        ]);
        Denomination::create([
            'type' => 'DOLAR',
            'value' => 50,
        ]);
        Denomination::create([
            'type' => 'DOLAR',
            'value' => 20,
        ]);
        Denomination::create([
            'type' => 'DOLAR',
            'value' => 10,
        ]);
        Denomination::create([
            'type' => 'DOLAR',
            'value' => 5,
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 100,
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 25,
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 20,
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 10,
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 5,
        ]);
        Denomination::create([
            'type' => 'MONEDA',
            'value' => 1,
        ]);
    }
}
