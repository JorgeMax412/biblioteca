<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = array(
            [
                'nombre' => 'Juan',
                'edad' => 30,
                'categoria' => 1
                
            ],
            [
                'nombre' => 'Maria',
                'edad' => 25,
                'categoria' => 2
                
            ],
            [
                'nombre' => 'Pedro',
                'edad' => 35,
                'categoria' => 3
                
            ],
            [
                'nombre' => 'Luis',
                'edad' => 28,
                'categoria' => 4
                
            ],
            [
                'nombre' => 'Ana',
                'edad' => 40,
                'categoria' => 5
                
            ],
            [
                'nombre' => 'Sofia',
                'edad' => 22,
                'categoria' => 6
                
            ],
            [
                'nombre' => 'Carlos',
                'edad' => 33,
                'categoria' => 7
                
            ],
            [
                'nombre' => 'Elena',
                'edad' => 45,
                'categoria' => 8
                
            ],
            [
                'nombre' => 'Mario',
                'edad' => 27,
                'categoria' => 9
                
            ],
            [
                'nombre' => 'Laura',
                'edad' => 38,
                'categoria' => 10
                
            ],
            [
                'nombre' => 'Diego',
                'edad' => 31,
                'categoria' => 11
                
            ],
            [
                'nombre' => 'Lucia',
                'edad' => 29,
                'categoria' => 12
                
            ],
        );
        DB::table('clientes')->insert($data);
    }

}
