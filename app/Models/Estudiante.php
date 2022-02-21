<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Estudiante extends Model
{
    use HasFactory;
    protected $datos = 'estudiantes';
    public $fillable = [
        'id',
        'Nombre',
        'Telefono',
        'Direccion',
        'Nota1',
        'Nota2',
        'Nota3',
        'Observaciones'
    ];
    public $timestamps = false;
}
