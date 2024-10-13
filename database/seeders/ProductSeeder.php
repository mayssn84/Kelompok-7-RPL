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
            ['name' => 'Kacang mente', 'description' => 'Kacang khas Kendari', 'price' => 30000],
            ['name' => 'Abon Ikan Marni', 'description' => 'Abon Ikan', 'price' => 50000],
            ['name' => 'Kain Tenun Khas Kendari', 'description' => 'Kain tenun khas', 'price' => 150000],
            ['name' => 'Gula Ni’i', 'description' => 'Gula aren', 'price' => 20000],
        ];
    }
}
