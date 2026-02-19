<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

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
            'ISNB' => 9780307350435,
            'copias_totales' => 3,
            'copias_disponibles' => 3,
            'estado' => true,
        ]);
        
        DB::table('books')->insert([
            'titulo' => 'Orgullo y Prejuicio',
            'descripcion' => 'Novela de costumbres y amor',
            'ISNB' => 9788467040418,
            'copias_totales' => 4,
            'copias_disponibles' => 4,
            'estado' => true,
        ]);

        DB::table('books')->insert([
            'titulo' => 'Crimen y Castigo',
            'descripcion' => 'Dilemas morales y justicia',
            'ISNB' => 9788420651330,
            'copias_totales' => 2,
            'copias_disponibles' => 2,
            'estado' => true,
        ]);
        DB::table('books')->insert([
            'titulo' => 'El principito',
            'descripcion' => 'relato corto sobre la vida',
            'ISNB' => 9780156013987,
            'copias_totales' => 10,
            'copias_disponibles' => 10,
            'estado' => true,
        ]);
        DB::table('books')->insert([
            'titulo' => '1984',
            'descripcion' => 'Distopía política y vigilancia',
            'ISNB' => 9788466332514,
            'copias_totales' => 6,
            'copias_disponibles' => 6,
            'estado' => true,
        ]);

        DB::table('books')->insert([
            'titulo' => 'La Odisea',
            'descripcion' => 'Viaje épico de Ulises',
            'ISNB' => 9788424924515,
            'copias_totales' => 3,
            'copias_disponibles' => 3,
            'estado' => true,
        ]);

        DB::table('books') ->insert([
            'titulo' => 'El Gran Gatsby',
            'descripcion' => 'El sueño americano en los años 20',
            'ISNB' => 9788467036411,
            'copias_totales' => 4, 
            'copias_disponibles' => 4,
            'estado' => true,
        ]);

        DB::table('books') ->insert([
            'titulo' => 'Rayuela',
            'descripcion' => 'Novela experimental de Cortázar',
            'ISNB' => 9788420431321,
            'copias_totales' => 2,
            'copias_disponibles' => 2,
            'estado' => true,
        ]);

        DB::table('books') ->insert([
            'titulo' => 'Hamlet',
            'descripcion' => 'Tragedia de venganza y duda',
            'ISNB' => 9788437600123,
            'copias_totales' => 5,
            'copias_disponibles' => 5,
            'estado' =>true,
        ]);
        
        $books = Book::factory()->count(90)->create();
    }   
}


