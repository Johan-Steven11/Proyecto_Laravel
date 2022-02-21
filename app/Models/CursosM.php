<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursosM extends Model
{
    use HasFactory;
    protected $datos = 'cursos_m_s';
    public $fillable = [
        'id',
        'Nombre',
        'Codigo',
        'Precio',
        'id_E'
    ];
    public $timestamps = false;
}
