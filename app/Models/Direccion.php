<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;
    protected $table = 'direcciones';

    protected $fillable = [
        'estado',
        'municipio',
        'direccion',
        'codigo_postal',
        'longitud',
        'latitud',
        'regular',
        'premium',
        'diesel'
    ];

    public $timestamps = false;
}
