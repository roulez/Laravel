<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class prestamos extends Model
{
    protected $fillable = [
        'user_id',
        'book_id',
        'fecha_prestamo',
        'fecha_devolucion'
    ];
}
