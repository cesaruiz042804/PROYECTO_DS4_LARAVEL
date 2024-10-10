<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{ asset('assets_css/crearCuenta.css') }}">
</head>
<body>
    <header>
        <nav class="header__nav">
            <img src="{{ asset('recursos_index/Logo Shirine.png') }}" alt="Logo Shirini-E" title="SHIRINI-E">
            <a class="header-a" href="{{ route('Shirini-e/index.php') }}">SHIRINI-E</a>
            <button id="MenuHamburguesa"><img src="{{ asset('recursos_index/Icon.png') }}" alt="Menu" title="Menu"></button>
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
            <li><a class="navSecundario__list-a" href="#">Soporte al cliente</a></li>
            <li><a class="navSecundario__list-a" href="{{ route('Productos/micarrito.php') }}">Mi carrito</a></li>
            <li><a href="../iniciosecion.html" class="nav__list-a enlaceLogin" href="{{ route('Iniciar-Sesion.php') }}">Iniciar Sesión</a></li>
        </ul>
    </nav>
    <main>
        <div class="Main__ContenedorTarjeta">
            <form class="ContenedorTarjeta-InfoTarjetas">
                <h3>Registro</h3>
                <label for="correo">
                    Correo Electrónico
                    <input type="text" placeholder="usuario@gmail.com" id="correo">
                </label>
                <label for="contraseña">
                    Contraseña
                    <input type="password" placeholder="Contraseña" id="contraseña">
                </label>
                <label for="nombreusuario">
                    Nombre de Usuario
                    <input type="text" placeholder="Nombre Usuario" id="nombreusuario">
                </label>
                <label for="numerotelefono">
                    Número de teléfono
                    <input type="number" placeholder="####-####" id="numerotelefono">
                </label>
                <div class="ContenedroTarjeta-BotonesDePagar">
                    <button>
                        <a href="../iniciosecion.html" class="InfoTarjeta-Pagar">Registrarse</a>
                    </button>
                </div>
            </form>
            
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
    <script type="module" src="{{ asset('assets_js/crearCuenta.js') }}"></script>
</body>
</html>