<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MensajeRecibido;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'asunto' => 'required',
            'mensaje' => 'required',
        ]);

        $mensaje = $request->all();

        Mail::to('destinatario@example.com')->send(new MensajeRecibido($mensaje));

        return back()->with('success', 'Mensaje enviado con éxito');
    }
}