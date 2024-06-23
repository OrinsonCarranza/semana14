@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('personas.store') }}" method="POST">
    @csrf
    <div>
        <label for="cPerApellido">Apellido:</label>
        <input type="text" name="cPerApellido" id="cPerApellido" value="{{ old('cPerApellido') }}">
        @if ($errors->has('cPerApellido'))
            <span class="text-danger">{{ $errors->first('cPerApellido') }}</span>
        @endif
    </div>
    <div>
        <label for="cPerNombre">Nombre:</label>
        <input type="text" name="cPerNombre" id="cPerNombre" value="{{ old('cPerNombre') }}">
        @if ($errors->has('cPerNombre'))
            <span class="text-danger">{{ $errors->first('cPerNombre') }}</span>
        @endif
    </div>
    <div>
        <label for="cPerDireccion">Dirección:</label>
        <input type="text" name="cPerDireccion" id="cPerDireccion" value="{{ old('cPerDireccion') }}">
        @if ($errors->has('cPerDireccion'))
            <span class="text-danger">{{ $errors->first('cPerDireccion') }}</span>
        @endif
    </div>
    <div>
        <label for="dPerFecNac">Fecha de Nacimiento:</label>
        <input type="date" name="dPerFecNac" id="dPerFecNac" value="{{ old('dPerFecNac') }}">
        @if ($errors->has('dPerFecNac'))
            <span class="text-danger">{{ $errors->first('dPerFecNac') }}</span>
        @endif
    </div>
    <div>
        <label for="nPerEdad">Edad:</label>
        <input type="number" name="nPerEdad" id="nPerEdad" value="{{ old('nPerEdad') }}">
        @if ($errors->has('nPerEdad'))
            <span class="text-danger">{{ $errors->first('nPerEdad') }}</span>
        @endif
    </div>
    <div>
        <label for="nPerSueldo">Sueldo:</label>
        <input type="number" step="0.01" name="nPerSueldo" id="nPerSueldo" value="{{ old('nPerSueldo') }}">
        @if ($errors->has('nPerSueldo'))
            <span class="text-danger">{{ $errors->first('nPerSueldo') }}</span>
        @endif
    </div>
    <div>
        <label for="nPerEstado">Estado:</label>
        <select name="nPerEstado" id="nPerEstado">
            <option value="1" {{ old('nPerEstado') == '1' ? 'selected' : '' }}>1</option>
            <option value="0" {{ old('nPerEstado') == '0' ? 'selected' : '' }}>0</option>
        </select>
        @if ($errors->has('nPerEstado'))
            <span class="text-danger">{{ $errors->first('nPerEstado') }}</span>
        @endif
    </div>
    <button type="submit">Crear Persona</button>
</form>
