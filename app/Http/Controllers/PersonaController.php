<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePersonaRequest;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    public function create()
    {
        return view('personas.create');
    }

    // Modificar el método store para usar CreatePersonaRequest
    public function store(CreatePersonaRequest $request)
    {
        // La validación se realiza automáticamente con CreatePersonaRequest

        // Obtenemos los datos validados
        $validatedData = $request->validated();

        // Agregar un valor para cPerRnd
        $validatedData['cPerRnd'] = 'abc123xyz'; // Puedes cambiar esto según tus necesidades

        // Guardamos la nueva persona en la base de datos
        Persona::create($validatedData);

        // Redirigimos a la lista de personas con un mensaje de éxito
        return redirect()->route('personas.index')->with('success', 'Persona creada exitosamente.');
    }
}
