<!DOCTYPE html>
<html>
<head>
    <title>Contacto</title>
</head>
<body>
    <h1>Contacto</h1>
    <nav>
        <a href="/">Inicio</a> -
        <a href="{{ route('personas.index') }}">Personas</a> -
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
</html>
