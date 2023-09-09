<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class libros extends Model
{
    protected $fillable = [
        'titulo',
        'autor',
        'anio_publicacion',
        'genero',
        'disponible'
    ];
}
