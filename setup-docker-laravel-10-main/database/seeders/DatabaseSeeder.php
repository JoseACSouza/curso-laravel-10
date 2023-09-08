<?php

namespace Database\Seeders;
use Database\Seeders\productsSeeder;
use Database\Seeders\ClientesSeeder;
use Database\Seeders\vendasSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            productsSeeder::class,
            ClientesSeeder::class,
            vendasSeeder::class,
        ]);
    }
}
