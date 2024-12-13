<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriasCarreras extends Model
{
    use HasFactory;

    
    protected $table = 'materias_carreras';

    
    protected $fillable = [
        'carrera',
        'reticula',
        'materia',
        'creditos_materia',
        'horas_teoricas',
        'horas_practicas',
        'orden_certificado',
        'semestre_reticula',
        'creditos_prerrequisito',
        'especialidad',
        'clave_oficial_materia',
        'estatus_materia_carrera',
        'programa_estudios',
        'renglon',
    ];    
}
