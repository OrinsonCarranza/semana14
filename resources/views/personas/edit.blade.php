@extends('layouts.app')

@section('content')
    <h1>Editar Persona</h1>
    @include('partials.validation-errors')
    <form action="{{ route('personas.update', $persona->nPerCodigo) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="cPerApellido">Apellido:</label>
            <input type="text" name="cPerApellido" id="cPerApellido" value="{{ old('cPerApellido', $persona->cPerApellido) }}">
            @if ($errors->has('cPerApellido'))
                <span class="text-danger">{{ $errors->first('cPerApellido') }}</span>
            @endif
        </div>
        <div>
            <label for="cPerNombre">Nombre:</label>
            <input type="text" name="cPerNombre" id="cPerNombre" value="{{ old('cPerNombre', $persona->cPerNombre) }}">
            @if ($errors->has('cPerNombre'))
                <span class="text-danger">{{ $errors->first('cPerNombre') }}</span>
            @endif
        </div>
        <div>
            <label for="cPerDireccion">Dirección:</label>
            <input type="text" name="cPerDireccion" id="cPerDireccion" value="{{ old('cPerDireccion', $persona->cPerDireccion) }}">
            @if ($errors->has('cPerDireccion'))
                <span class="text-danger">{{ $errors->first('cPerDireccion') }}</span>
            @endif
        </div>
        <div>
            <label for="dPerFecNac">Fecha de Nacimiento:</label>
            <input type="date" name="dPerFecNac" id="dPerFecNac" value="{{ old('dPerFecNac', $persona->dPerFecNac) }}">
            @if ($errors->has('dPerFecNac'))
                <span class="text-danger">{{ $errors->first('dPerFecNac') }}</span>
            @endif
        </div>
        <div>
            <label for="nPerEdad">Edad:</label>
            <input type="number" name="nPerEdad" id="nPerEdad" value="{{ old('nPerEdad', $persona->nPerEdad) }}">
            @if ($errors->has('nPerEdad'))
                <span class="text-danger">{{ $errors->first('nPerEdad') }}</span>
            @endif
        </div>
        <div>
            <label for="nPerSueldo">Sueldo:</label>
            <input type="number" step="0.01" name="nPerSueldo" id="nPerSueldo" value="{{ old('nPerSueldo', $persona->nPerSueldo) }}">
            @if ($errors->has('nPerSueldo'))
                <span class="text-danger">{{ $errors->first('nPerSueldo') }}</span>
            @endif
        </div>
        <div>
            <label for="nPerEstado">Estado:</label>
            <select name="nPerEstado" id="nPerEstado">
                <option value="1" {{ old('nPerEstado', $persona->nPerEstado) == '1' ? 'selected' : '' }}>1</option>
                <option value="0" {{ old('nPerEstado', $persona->nPerEstado) == '0' ? 'selected' : '' }}>0</option>
            </select>
            @if ($errors->has('nPerEstado'))
                <span class="text-danger">{{ $errors->first('nPerEstado') }}</span>
            @endif
        </div>
        <button type="submit">Actualizar Persona</button>
    </form>
@endsection
