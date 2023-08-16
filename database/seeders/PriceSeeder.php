<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Price;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Price::create([
            'name' => 'Gratis',
            'value' => '0'
        ]);

        Price::create([
            'name' => '1350 MXN$ (nivel 1)',
            'value' => '1350'
        ]);

        Price::create([
            'name' => '1750 MXN$ (nivel 2)',
            'value' => '1750'
        ]);

        Price::create([
            'name' => '2000 MXN$ (nivel 3)',
            'value' => '2000'
        ]);

    }
}
