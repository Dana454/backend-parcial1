<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = [
        'titulo',
        'descripcion',
        'ISNB',
        'copias_totales',
        'copias_disponibles',
        'estado',
    ];
}
