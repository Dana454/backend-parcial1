<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Registros extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'titulo' => 'Don Quijote de la Mancha',
            'descripcion' => 'Aventuras de un caballero loco',
            'ISNB' => 9788424115531,
            'copias_totales' => 5,
            'copias_disponibles' => 5,
            'estado' => true,
        ]);
    }
}
