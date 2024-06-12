<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = array(
            [
                'nombre' => 'Ficcion'
            ],
            [
                'nombre' => 'Tecnologia'
            ],
            [
                'nombre' => 'Ciencia Ficcion'
            ],
            [
                'nombre' => 'Fantasia'
            ],
            [
                'nombre' => 'Misterio'
            ],
            [
                'nombre' => 'Terror'
            ],
            [
                'nombre' => 'Romance'
            ],
            [
                'nombre' => 'Biografias'
            ],
            [
                'nombre' => 'Historia'
            ],
            [
                'nombre' => 'Politica'
            ],
            [
                'nombre' => 'Economia'
            ],
            [
                'nombre' => 'Arte y fotografia'
            ]
        );

        DB::table('categorias')->insert($data);
    }


}
