<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // Llamamos las clases Seeder que deseamos ejecutar
        $this->call([
            CategoriasSeeder::class,
            ClientesSeeder::class
        ]);
    }
}
