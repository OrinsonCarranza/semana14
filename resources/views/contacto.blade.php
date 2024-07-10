<!-- <!DOCTYPE html>
<html>
<head>
    <title>Contacto</title>
</head>
<body>
    <h1>Contacto</h1>
    <nav>
        <a href="/">Inicio</a> -
        <a href="{{ route('personas.index') }}">Personas</a> -
        <a href="{{ route('personas.create') }}">Crear Persona</a> -
        <a href="{{ route('contacto') }}">Contacto</a>
    </nav>
    <p>Puedes ponerte en contacto con nosotros a través del siguiente formulario:</p>
    <form action="#" method="post">
        @csrf
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="message">Mensaje:</label><br>
        <textarea id="message" name="message"></textarea><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html> -->
<!DOCTYPE html>
<html>
<head>
    <title>Contacto</title>
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Contacto</h1>
        <nav class="mb-4">
            <a href="/">Inicio</a> -
            <a href="{{ route('personas.index') }}">Personas</a> -
            <a href="{{ route('personas.create') }}">Crear Persona</a> -
            <a href="{{ route('contacto') }}">Contacto</a>
        </nav>
        <p>Puedes ponerte en contacto con nosotros a través del siguiente formulario:</p>
        <form action="{{ route('contacto.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
                @error('nombre')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="asunto">Asunto:</label>
                <input type="text" class="form-control" id="asunto" name="asunto" value="{{ old('asunto') }}">
                @error('asunto')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="mensaje">Mensaje:</label>
                <textarea class="form-control" id="mensaje" name="mensaje">{{ old('mensaje') }}</textarea>
                @error('mensaje')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-secondary">Cancelar</button>
        </form>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
