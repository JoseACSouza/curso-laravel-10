<?php

namespace Database\Seeders;

use App\Models\products as ModelsProducts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productsSeeder extends Seeder
{
    public function run(): void
    {
        ModelsProducts::create([
            'name' => 'Churrasqueira controle remoto',
            'value' => '3965.45',
        ]);
    }
}
