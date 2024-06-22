<?php
/*
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //
}
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }
}