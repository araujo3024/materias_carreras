@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Registro</h1>

    <form action="{{ route('materias_carreras.update', $materiasCarrera->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="carrera" class="form-label">Carrera:</label>
            <input type="text" id="carrera" name="carrera" class="form-control" value="{{ $materiasCarrera->carrera }}" required>
        </div>

        <div class="mb-3">
            <label for="reticula" class="form-label">Retícula:</label>
            <input type="number" id="reticula" name="reticula" class="form-control" value="{{ $materiasCarrera->reticula }}" required>
        </div>

        <div class="mb-3">
            <label for="materia" class="form-label">Materia:</label>
            <input type="text" id="materia" name="materia" class="form-control" value="{{ $materiasCarrera->materia }}" required>
        </div>

        <!-- Agrega más campos según sea necesario -->

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('materias_carreras.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

