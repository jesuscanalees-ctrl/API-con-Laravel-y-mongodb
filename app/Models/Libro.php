<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'titulo',
        'autor',
        'genero',
        'anio_publicacion',
    ];
}
