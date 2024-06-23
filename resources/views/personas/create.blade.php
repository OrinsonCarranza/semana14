<!DOCTYPE html>
<html>
<head>
    <title>Crear Persona</title>
</head>
<body>
    <h1>Crear Persona</h1>
    <nav>
        <a href="/">Inicio</a> -
        <a href="{{ route('personas.index') }}">Personas</a> -
        <a href="{{ route('contacto') }}">Contacto</a>
    </nav>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('personas.store') }}" method="POST">
        @csrf
        <label for="cPerApellido">Apellido:</label>
        <input type="text" name="cPerApellido" value="{{ old('cPerApellido') }}" required><br>

        <label for="cPerNombre">Nombre:</label>
        <input type="text" name="cPerNombre" value="{{ old('cPerNombre') }}" required><br>

        <label for="cPerDireccion">Dirección:</label>
        <input type="text" name="cPerDireccion" value="{{ old('cPerDireccion') }}" required><br>

        <label for="dPerFecNac">Fecha de Nacimiento:</label>
        <input type="date" name="dPerFecNac" value="{{ old('dPerFecNac') }}" required><br>

        <label for="nPerEdad">Edad:</label>
        <input type="number" name="nPerEdad" value="{{ old('nPerEdad') }}" required><br>

        <label for="nPerSueldo">Sueldo:</label>
        <input type="number" step="0.01" name="nPerSueldo" value="{{ old('nPerSueldo') }}" required><br>

        <label for="nPerEstado">Estado:</label>
        <select name="nPerEstado" required>
            <option value="1" {{ old('nPerEstado') == 1 ? 'selected' : '' }}>Activo</option>
            <option value="0" {{ old('nPerEstado') == 0 ? 'selected' : '' }}>Inactivo</option>
        </select><br>

        <label for="cPerRnd">RND:</label>
        <input type="text" name="cPerRnd" value="{{ old('cPerRnd') }}" required><br>

        <button type="submit">Crear</button>
    </form>
</body>
</html>
