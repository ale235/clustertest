<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    protected $table = 'servicios';
    protected $primaryKey = 'id';

    protected $fillable = [
        'titulo', 'descripcion', 'icono', 'orden', 'estado'
    ];
}
