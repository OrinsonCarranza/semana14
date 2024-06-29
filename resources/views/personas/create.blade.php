@extends('layouts.app')

@section('content')
    <h1>Crear Persona</h1>
    @include('partials.validation-errors')
    @include('partials.form', ['action' => route('personas.store'), 'method' => 'POST', 'btnText' => 'Guardar'])
@endsection