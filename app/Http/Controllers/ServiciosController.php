<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
    {
        // Lógica para listar los servicios
        return view('servicios.index');
    }

    public function create()
    {
        // Lógica para mostrar el formulario de creación de servicios
        return view('servicios.create');
    }

    public function store(Request $request)
    {
        // Lógica para guardar un nuevo servicio
        // Validar y guardar el servicio
        // Redirigir con un mensaje flash
        return redirect()->route('servicios.index')->with('success', 'Servicio creado con éxito');
    }

    public function show($id)
    {
        // Lógica para mostrar un servicio específico
        return view('servicios.show');
    }

    public function edit($id)
    {
        // Lógica para mostrar el formulario de edición de un servicio
        return view('servicios.edit');
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar un servicio
        // Validar y actualizar el servicio
        // Redirigir con un mensaje flash
        return redirect()->route('servicios.index')->with('success', 'Servicio actualizado con éxito');
    }

    public function destroy($id)
    {
        // Lógica para eliminar un servicio
        // Eliminar el servicio
        // Redirigir con un mensaje flash
        return redirect()->route('servicios.index')->with('success', 'Servicio eliminado con éxito');
    }
}
