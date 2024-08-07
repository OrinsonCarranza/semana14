<!-- <!DOCTYPE html>
<html>
<head>
    <title>Lista de Personas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px;
        }
        .card img {
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Lista de Personas</h1>
        <nav class="mb-4">
            <a href="/">Inicio</a> -
            <a href="{{ route('personas.index') }}">Personas</a> -
            @auth
            <a href="{{ route('personas.create') }}">Crear Persona</a> -
            @endauth
            <a href="{{ route('contacto') }}">Contacto</a>
        </nav>

        <div class="row">
            @foreach ($personas as $persona)
            <div class="col-md-4">
                <div class="card">
                    @if($persona->image)
                        <img src="/storage/{{$persona->image}}" class="card-img-top" alt="{{$persona->nombre}}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $persona->cPerApellido }} {{ $persona->cPerNombre }}</h5>
                        <p class="card-text">Dirección: {{ $persona->cPerDireccion }}</p>
                        <p class="card-text">Fecha de Nacimiento: {{ $persona->dPerFecNac }}</p>
                        <p class="card-text">Edad: {{ $persona->nPerEdad }}</p>
                        <p class="card-text">Sueldo: {{ $persona->nPerSueldo }}</p>
                        <p class="card-text">Estado: {{ $persona->nPerEstado }}</p>
                        <a href="{{ route('personas.edit', $persona->nPerCodigo) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('personas.destroy', $persona->nPerCodigo) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta persona?')">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Personas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px;
        }
        .card img {
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Lista de Personas</h1>
        <nav class="mb-4">
            <a href="/">Inicio</a> -
            <a href="{{ route('personas.index') }}">Personas</a> -
            @auth
            <a href="{{ route('personas.create') }}">Crear Persona</a> -
            @endauth
            <a href="{{ route('contacto') }}">Contacto</a>
        </nav>

        <div class="row">
            @foreach ($personas as $persona)
            <div class="col-md-4">
                <div class="card">
                    @if($persona->image)
                        <img src="/storage/{{$persona->image}}" class="card-img-top" alt="{{$persona->nombre}}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $persona->cPerApellido }} {{ $persona->cPerNombre }}</h5>
                        <p class="card-text">Dirección: {{ $persona->cPerDireccion }}</p>
                        <p class="card-text">Fecha de Nacimiento: {{ $persona->dPerFecNac }}</p>
                        <p class="card-text">Edad: {{ $persona->nPerEdad }}</p>
                        <p class="card-text">Sueldo: {{ $persona->nPerSueldo }}</p>
                        <p class="card-text">Estado: {{ $persona->nPerEstado }}</p>
                        <a href="{{ route('personas.edit', $persona->nPerCodigo) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('personas.destroy', $persona->nPerCodigo) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar esta persona?')">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

