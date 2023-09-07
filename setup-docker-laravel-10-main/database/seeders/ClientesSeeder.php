<?php

namespace Database\Seeders;

use App\Models\Clientes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run(): void
    {
        Clientes::create([
            'name' => 'antonio',
            'email'=> 'antonio@email.com',
            'endereco' => 'rua maluca',
            'logradouro'=> 'casa',
            'cep' => '39670-000',
            'bairro' => 'Florestal',
         ]);
    }
}
