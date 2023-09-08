<?php

namespace Database\Seeders;

use App\Models\Vendas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class vendasSeeder extends Seeder
{
    public function run(): void
    {
        Vendas::create([
            'numero_da_venda'=>1,
            'id_produto'=>1,
            'id_cliente'=>1,
        ]);
    }
}
