<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productsSeeder extends Seeder
{
    public function run(): void
    {
        Products::create([
            'name' => 'Churrasqueira controle remoto',
            'value' => '3965.45',
        ]);
    }
}
