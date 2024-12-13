@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Nueva Materia en Carrera</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('materias_carreras.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="carrera" class="form-label">Carrera</label>
                <input type="text" name="carrera" class="form-control" id="carrera" value="{{ old('carrera') }}" required>
            </div>

            <div class="mb-3">
                <label for="reticula" class="form-label">Retícula</label>
                <input type="number" name="reticula" class="form-control" id="reticula" value="{{ old('reticula') }}" required>
            </div>

            <div class="mb-3">
                <label for="materia" class="form-label">Materia</label>
                <input type="text" name="materia" class="form-control" id="materia" value="{{ old('materia') }}" required>
            </div>

            <div class="mb-3">
                <label for="creditos_materia" class="form-label">Créditos Materia</label>
                <input type="number" name="creditos_materia" class="form-control" id="creditos_materia" value="{{ old('creditos_materia') }}">
            </div>

            <div class="mb-3">
                <label for="horas_teoricas" class="form-label">Horas Teóricas</label>
                <input type="number" name="horas_teoricas" class="form-control" id="horas_teoricas" value="{{ old('horas_teoricas') }}" required>
            </div>

            <div class="mb-3">
                <label for="horas_practicas" class="form-label">Horas Prácticas</label>
                <input type="number" name="horas_practicas" class="form-control" id="horas_practicas" value="{{ old('horas_practicas') }}" required>
            </div>

            <div class="mb-3">
                <label for="orden_certificado" class="form-label">Orden Certificado</label>
                <input type="number" name="orden_certificado" class="form-control" id="orden_certificado" value="{{ old('orden_certificado') }}">
            </div>

            <div class="mb-3">
                <label for="semestre_reticula" class="form-label">Semestre Retícula</label>
                <input type="number" name="semestre_reticula" class="form-control" id="semestre_reticula" value="{{ old('semestre_reticula') }}" required>
            </div>

            <div class="mb-3">
                <label for="creditos_prerrequisito" class="form-label">Créditos Prerrequisito</label>
                <input type="number" name="creditos_prerrequisito" class="form-control" id="creditos_prerrequisito" value="{{ old('creditos_prerrequisito') }}">
            </div>

            <div class="mb-3">
                <label for="especialidad" class="form-label">Especialidad</label>
                <input type="text" name="especialidad" class="form-control" id="especialidad" value="{{ old('especialidad') }}" required>
            </div>

            <div class="mb-3">
                <label for="clave_oficial_materia" class="form-label">Clave Oficial Materia</label>
                <input type="text" name="clave_oficial_materia" class="form-control" id="clave_oficial_materia" value="{{ old('clave_oficial_materia') }}">
            </div>

            <div class="mb-3">
                <label for="estatus_materia_carrera" class="form-label">Estatus Materia Carrera</label>
                <input type="text" name="estatus_materia_carrera" class="form-control" id="estatus_materia_carrera" value="{{ old('estatus_materia_carrera') }}">
            </div>

            <div class="mb-3">
                <label for="programa_estudios" class="form-label">Programa de Estudios</label>
                <textarea name="programa_estudios" class="form-control" id="programa_estudios">{{ old('programa_estudios') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="renglon" class="form-label">Renglón</label>
                <input type="number" name="renglon" class="form-control" id="renglon" value="{{ old('renglon') }}">
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
