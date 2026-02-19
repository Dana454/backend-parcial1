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

        DB::table('books')->insert([
            'titulo' => 'Cien años de soledad',
            'descripcion' => 'Historia de la familia Buendía',
            'ISNB' => ,
            'copias_totales' => 3,
            'copias_disponibles' => 3,
            'estado' => true,
        ]);
        
        DB::table('books')->insert([
            'titulo' => 'Orgullo y Prejuicio',
            'descripcion' => 'Novela de costumbres y amor',
            'ISNB' => ,
            'copias_totales' => 4,
            'copias_disponibles' => 4,
            'estado' => true,
        ]);

        DB::table('books')->insert([
            'titulo' => 'Crimen y Castigo',
            'descripcion' => 'Dilemas morales y justicia',
            'ISNB' => ,
            'copias_totales' => 2,
            'copias_disponibles' => 2,
            'estado' => true,
        ]);
        DB::table('books')->insert([
            'titulo' => 'El principito',
            'descripcion' => 'relato corto sobre la vida',
            'ISNB' => ,
            'copias_totales' => 10,
            'copias_disponibles' => 10,
            'estado' => true,
        ]);
        DB::table('books')->insert([
            'titulo' => '1984',
            'descripcion' => 'Distopía política y vigilancia',
            'ISNB' => ,
            'copias_totales' => 6,
            'copias_disponibles' => 6,
            'estado' => true,
        ]);
    }   
}
