<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{

    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
        ]);

        $persona = Persona::create($validated);
        return response()->json($persona, 201);
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'sometimes|string|max:255',
            'apellido' => 'sometimes|string|max:255',
            'telefono' => 'sometimes|string|max:20',
        ]);

        $persona->update($validated);
        return response()->json($persona);
    }

    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();

        return response()->json(['message' => 'Persona eliminada correctamente']);
    }
}