@extends('layouts.app')

@section('content')
    <h1>Editar Persona</h1>
    @include('partials.validation-errors')
    @include('partials.form', ['action' => route('personas.update', $persona->nPerCodigo), 'method' => 'PUT', 'btnText' => 'Actualizar'])
@endsection
