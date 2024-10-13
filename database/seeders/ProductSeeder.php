<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Kacang mete', 'description' => 'Kacang khas Kendari', 'price' => 40000],
            ['name' => 'Abon Ikan Marlin', 'description' => 'Abon Ikan Marlin Khas', 'price' => 30000],
            ['name' => 'Kain Tenun Khas Kendari', 'description' => 'Kain tenun khas', 'price' => 70000],
            ['name' => 'Bagea', 'description' => 'Kue Khas kendari', 'price' => 35000],
            ['name' => 'Brownies Mete', 'description' => 'Brownies Khas Kendari', 'price' => 60000],
            ['name' => 'Souvenir Khas Kendari', 'description' => 'Souvenir  Khas', 'price' => 20000],
        ];
    }
}
