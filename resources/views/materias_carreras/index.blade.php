@extends('layouts.app') <!-- Extender tu diseño base -->

@section('content')
<div class="container">
    <h1>Listado de Materias Carreras</h1>

    <!-- Mostrar mensajes de éxito -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Botón para crear un nuevo registro -->
    <a href="{{ route('materias_carreras.create') }}" class="btn btn-primary mb-3">Crear Nueva Materia Carrera</a>

    <!-- Tabla de datos -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Carrera</th>
                <th>Materia</th>
                <th>Créditos</th>
                <th>Semestre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($materiasCarreras as $materia)
                <tr>
                    <td>{{ $materia->id }}</td>
                    <td>{{ $materia->carrera }}</td>
                    <td>{{ $materia->materia }}</td>
                    <td>{{ $materia->creditos_materia }}</td>
                    <td>{{ $materia->semestre_reticula }}</td>
                    <td>
                        <!-- Botón para ver detalles -->
                        <a href="{{ route('materias_carreras.show', $materia->id) }}" class="btn btn-info btn-sm">Ver</a>
                        
                        <!-- Botón para editar -->
                        <a href="{{ route('materias_carreras.edit', $materia->id) }}" class="btn btn-warning btn-sm">Editar</a>

                        <!-- Formulario para eliminar -->
                        <form action="{{ route('materias_carreras.destroy', $materia->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este registro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No hay registros disponibles.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
