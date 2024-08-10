@extends('layouts.app')

@section('content')
    <h1>Editar Persona</h1>
    
    @if ($persona->image)
        <div>
            <!-- Mostrar la imagen actual -->
            <img src="/storage/{{($persona->image) }}" alt="Imagen de {{ $persona->cPerNombre }}" width="300" height="200">
        </div>
    @endif

    <!-- Incluir los errores de validación y el formulario -->
    @include('partials.validation-errors')
    @include('partials.form', ['action' => route('personas.update', $persona->nPerCodigo), 'method' => 'PUT', 'btnText' => 'Actualizar'])
@endsection
