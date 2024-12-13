<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MateriasCarreras;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ApiMateriasCarrerasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materiasCarreras = MateriasCarreras::all();
        return response()->json($materiasCarreras);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'carrera' => 'required|string|size:3',
            'reticula' => 'required|integer',
            'materia' => 'required|string|size:7',
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

        $materiasCarreras = MateriasCarreras::create($request->all());
        return response()->json($materiasCarreras, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $materiasCarreras = MateriasCarreras::findOrFail($id);
            return response()->json($materiasCarreras);
        } catch (ModelNotFoundException $e) {
            return response()->json(['error' => 'Registro no encontrado'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MateriasCarreras $materiasCarreras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'carrera' => 'required|string|size:3',
            'reticula' => 'required|integer',
            'materia' => 'required|string|size:7',
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

        $materiasCarreras = MateriasCarreras::findOrFail($id);
        $materiasCarreras->update($request->all());
        return response()->json($materiasCarreras);
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        MateriasCarreras::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
