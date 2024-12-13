<?php

namespace App\Http\Controllers;

use App\Models\MateriasCarreras; // Importar correctamente el modelo
use Illuminate\Http\Request;

class MateriasCarrerasController extends Controller
{
    // Mostrar todos los registros
    public function index()
    {
        $materiasCarreras = MateriasCarreras::all(); // Obtener todos los registros
        return view('materias_carreras.index', compact('materiasCarreras')); // Pasar la variable correcta
    }

    // Mostrar un registro específico
    public function show(MateriasCarreras $materiasCarrera) // Usar modelo binding y renombrar la variable
    {
        return view('materias_carreras.show', compact('materiasCarrera')); // Pasar la variable correcta
    }

    // Mostrar el formulario para crear un nuevo registro
    public function create()
    {
        return view('materias_carreras.create'); // Vista para crear
    }

    // Guardar un nuevo registro en la base de datos
    public function store(Request $request)
    {
        $validated = $request->validate([
            'carrera' => 'required|size:3',
            'reticula' => 'required|integer',
            'materia' => 'required|size:7',
            'creditos_materia' => 'nullable|integer',
            'horas_teoricas' => 'required|integer',
            'horas_practicas' => 'required|integer',
            'orden_certificado' => 'nullable|integer',
            'semestre_reticula' => 'required|integer',
            'creditos_prerrequisito' => 'nullable|integer',
            'especialidad' => 'required|string|max:5',
            'clave_oficial_materia' => 'nullable|string|max:10',
            'estatus_materia_carrera' => 'nullable|string|max:1',
            'programa_estudios' => 'nullable|string',
            'renglon' => 'nullable|integer',
        ]);

        MateriasCarreras::create($validated); // Crear un nuevo registro

        return redirect()->route('materias_carreras.index')->with('success', 'Registro creado exitosamente.');
    }

    // Mostrar el formulario para editar un registro existente
    public function edit(MateriasCarreras $materiasCarrera) // Usar modelo binding y renombrar la variable
    {
        return view('materias_carreras.edit', compact('materiasCarrera')); // Pasar la variable correcta
    }

    // Actualizar un registro en la base de datos
    public function update(Request $request, MateriasCarreras $materiasCarrera)
    {
        $validated = $request->validate([
            'carrera' => 'required|size:3',
            'reticula' => 'required|integer',
            'materia' => 'required|size:7',
            'creditos_materia' => 'nullable|integer',
            'horas_teoricas' => 'required|integer',
            'horas_practicas' => 'required|integer',
            'orden_certificado' => 'nullable|integer',
            'semestre_reticula' => 'required|integer',
            'creditos_prerrequisito' => 'nullable|integer',
            'especialidad' => 'required|string|max:5',
            'clave_oficial_materia' => 'nullable|string|max:10',
            'estatus_materia_carrera' => 'nullable|string|max:1',
            'programa_estudios' => 'nullable|string',
            'renglon' => 'nullable|integer',
        ]);

        $materiasCarrera->update($validated); // Actualizar el registro

        return redirect()->route('materias_carreras.index')->with('success', 'Registro actualizado exitosamente.');
    }

    // Eliminar un registro de la base de datos
    public function destroy(MateriasCarreras $materiasCarrera) // Usar modelo binding y renombrar la variable
    {
        $materiasCarrera->delete(); // Eliminar el registro

        return redirect()->route('materias_carreras.index')->with('success', 'Registro eliminado exitosamente.');
    }
}

