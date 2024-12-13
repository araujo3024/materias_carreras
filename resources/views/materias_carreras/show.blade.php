@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Materia en la Carrera</h1>

        <table class="table">
            <tr>
                <th>Carrera:</th>
                <td>{{ $materiasCarrera->carrera }}</td>
            </tr>
            <tr>
                <th>Retícula:</th>
                <td>{{ $materiasCarrera->reticula }}</td>
            </tr>
            <tr>
                <th>Materia:</th>
                <td>{{ $materiasCarrera->materia }}</td>
            </tr>
            <tr>
                <th>Créditos Materia:</th>
                <td>{{ $materiasCarrera->creditos_materia }}</td>
            </tr>
            <tr>
                <th>Horas Teóricas:</th>
                <td>{{ $materiasCarrera->horas_teoricas }}</td>
            </tr>
            <tr>
                <th>Horas Prácticas:</th>
                <td>{{ $materiasCarrera->horas_practicas }}</td>
            </tr>
            <tr>
                <th>Orden Certificado:</th>
                <td>{{ $materiasCarrera->orden_certificado }}</td>
            </tr>
            <tr>
                <th>Semestre Retícula:</th>
                <td>{{ $materiasCarrera->semestre_reticula }}</td>
            </tr>
            <tr>
                <th>Créditos Prerrequisito:</th>
                <td>{{ $materiasCarrera->creditos_prerrequisito }}</td>
            </tr>
            <tr>
                <th>Especialidad:</th>
                <td>{{ $materiasCarrera->especialidad }}</td>
            </tr>
            <tr>
                <th>Clave Oficial Materia:</th>
                <td>{{ $materiasCarrera->clave_oficial_materia }}</td>
            </tr>
            <tr>
                <th>Estatus Materia Carrera:</th>
                <td>{{ $materiasCarrera->estatus_materia_carrera }}</td>
            </tr>
            <tr>
                <th>Programa Estudios:</th>
                <td>{{ $materiasCarrera->programa_estudios }}</td>
            </tr>
            <tr>
                <th>Renglón:</th>
                <td>{{ $materiasCarrera->renglon }}</td>
            </tr>
        </table>

        <a href="{{ route('materias_carreras.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection

