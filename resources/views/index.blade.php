<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shirini-E</title>
    <link rel="stylesheet" href="{{ asset('assets_css/index.css') }}">
</head>
<body>
    <header>
        <nav class="header__nav">
            <button id="MenuHamburguesa"><img src="recursos_index/Icon.png" alt="Menu" title="Menu"></button>
            <a class="header-a" href="#"><img src="../recursos_index/Logo Shirine.png" alt="Logo Shirini-E" title="SHIRINI-E" id="ImgLogo"</a>
            <ul class="header__nav-list">
                <li><a class="nav__list-a" href="{{ route('Shirini-e/index.php') }}">Inicio</a></li>
                <li><a class="nav__list-a" href="{{ route('Productos/sabores.php') }}">Sabores</a></li>
                <li><a class="nav__list-a" href="#">Soporte al cliente</a></li>
                <li><a class="nav__list-a" href="{{ route('Productos/micarrito.php') }}">Mi carrito</a></li>
                <li><a class="nav__list-a enlaceLogin" href="{{ route('Iniciar-Sesion.php') }}">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <nav class="Header__NavegadorSecundario" id="MenuSecundario">
        <ul class="header__nav-listSecundario">
            <li><a class="navSecundario__list-a" href="{{ route('Shirini-e/index.php') }}">Inicio</a></li>
            <li><a class="navSecundario__list-a" href="{{ route('Productos/sabores.php') }}">Sabores</a></li>
            <li><a class="navSecundario__list-a" href="{{ route('Productos/micarrito.php') }}">Soporte al cliente</a></li>
            <li><a class="navSecundario__list-a" href="{{ route('Iniciar-Sesion.php') }}">Mi carrito</a></li>
        </ul>
    </nav>
    <main>
        <p><strong>Bienvenido</strong></p>
        <h1>SHIRINI-E</h1>
        <h2>Los mejores helados del west a un solo click</h2>
        <button><a href="{{ route('Productos/micarrito.php') }}">Ordenar Ahora</a></button>
        <img class="Contenedor-1" src="{{ asset('recursos_index/conoarriba.png')}} " alt="Cono de helado" title="Cono de helado">
        <div class="Contenedor-2">
            <img  src="{{ asset('recursos_index/conofresa.png') }}" alt="Cono con helado de fresa" title="Cono con helado de fresa">
        </div>
        
    </main>
    <footer>
        <p>Redes Sociales</p>
        <div class="Footer__Contenedor">
            <div class="Contenedor__Items1">
                <img src="{{ asset('recursos_index/facebook.png') }}" alt="Icono Facebook" title="Icono Facebook">
                <a href="#2">Facebook</a>
            </div>
            <div class="Contenedor__Items2">
                <img src="{{ asset('recursos_index/llamada-telefonica.png') }}" alt="Icono LLamada" title="Icono Llamada">
                <a href="#2">+507 5211-0000</a>
            </div>
            <div class="Contenedor__Items1">
                <img  src="{{ asset('recursos_index/instagram.png') }}" alt="Icono Instagram" title="Icono Instagram">
                <a href="#2">Instagram</a>
            </div>
            <div class="Contenedor__Items2">
                <img src="{{ asset('recursos_index/ubicacion.png') }}" alt="Icono Ubicacion">
                <a href="#2">Avenida J Alfaro, Local 9</a>
            </div>
            <div class="Contenedor__Items1">
                <img src="{{ asset('recursos_index/x.png') }}" alt="Icono X" title="Icono X">
                <a href="#2">X</a>
            </div>
            <div class="Contenedor__Items2">
                <img src="{{ asset('recursos_index/correo.png') }}" alt="Icono Correo" title="Icono Correo">
                <a href="#2" >shirinie.ice@shirinie.net</a>
            </div>
        </div>
    </footer>
</body>
<script type="module" src="{{ asset('assets_js/index.js') }}"></script>
</html>