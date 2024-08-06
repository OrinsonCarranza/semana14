<!DOCTYPE html>
<html>
<head>
    <title>Practica Calificada</title>
</head>
<body>
    <h1>EMPRESA</h1>
    <nav>
        <a href="/">Inicio</a> -
        <a href="{{ route('personas.index') }}">Personas</a> -
        @auth
        <a href="{{ route('personas.create') }}">Crear Persona</a> - 
        @endauth
        <a href="{{ route('contacto') }}">Contacto</a> - 
        @guest
            <a href="{{ route('login') }}">Login</a>
        @else
            <a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Cerrar Sesión</a>
        @endguest
    </nav>
<form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
    @csrf
</form>
    <!-- <h2>Empresa Semana 05 - 02</h2> -->
     <h2>Bienvenido a OrinsonCorporation. Práctica del curso TDB UNT</h2>
</body>
</html>
