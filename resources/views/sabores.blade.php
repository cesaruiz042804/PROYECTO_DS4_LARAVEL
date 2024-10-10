<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores</title>
    <link rel="stylesheet" href="{{ asset('assets_css/sabores.css') }}">
</head>

<body>
    <header>
        <nav class="header__nav">
            <img src="{{ asset('recursos_index/Logo Shirine.png') }}" alt="Logo Shirini-E" title="SHIRINI-E">
            <a class="header-a" href="{{ route('Shirini-e/index.php') }}">SHIRINI-E</a>
            <ul class="header__nav-list">
                <li><a class="nav__list-a" href="{{ route('Shirini-e/index.php') }}">Inicio</a></li>
                <li><a class="nav__list-a" href="{{ route('Productos/sabores.php') }}">Sabores</a></li>
                <li><a class="nav__list-a" href="#">Soporte al cliente</a></li>
                <li><a class="nav__list-a" href="{{ route('Productos/micarrito.php') }}">Mi carrito</a></li>
                <li><a class="nav__list-a enlaceLogin" href="{{ route('Iniciar-Sesion.php') }}">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="search-bar">
            <input type="text" id="search" class="search" placeholder="Buscar...">
            <button><i class="fa fa-search"></i></button>
        </div>
        <div class="carousel">
            <button class="prev">&#10094;</button>
            <div class="carousel-items">
                <div class="carousel-item" data-name="Vainilla">
                    <a href="{{ route('Helados/Vainilla') }}">
                        <img src="{{ asset('recursos_carrusel/vainilla.png') }}" alt="Vainilla">
                    </a>
                    <p>Vainilla</p>
                    <p>$13.99</p>
                </div>
                <div class="carousel-item" data-name="ChocoMint">
                    <a href="{{ route('Helados/ChocoMint') }}">
                        <img src="{{ asset('recursos_carrusel/chocomint.png') }}" alt="ChocoMint">
                    </a>
                    <p>ChocoMint</p>
                    <p>$21.99</p>
                </div>
                <div class="carousel-item" data-name="ChocoWest">
                    <a href="{{ route('Helados/ChocoWest') }}">
                        <img src="{{ asset('recursos_carrusel/Chocowest.png') }}" alt="ChocoWest">
                    </a>
                    <p>ChocoWest</p>
                    <p>$15.99</p>
                </div>
                <div class="carousel-item" data-name="Cereza">
                    <a href="{{ route('Helados/Cereza')}}">
                        <img src="{{ asset('recursos_carrusel/Cereza.png') }}" alt="Cereza">
                    </a>
                    <p>Cereza</p>
                    <p>$15.99</p>
                </div>
                <div class="carousel-item" data-name="Cookie">
                    <a href="{{ route('Helados/Cookie') }}">
                        <img src="{{ asset('recursos_carrusel/cookies.png') }}" alt="Cookie">
                    </a>
                    <p>Cookie</p>
                    <p>$16.75</p>
                </div>
                <div class="carousel-item" data-name="Mani">
                    <a href="{{ route('Helados/Mani') }}">
                        <img src="{{ asset('recursos_carrusel/mani.png') }}" alt="Mani">
                    </a>
                    <p>Mani</p>
                    <p>$20.99</p>
                </div>
            </div>
            <button class="next">&#10095;</button>
        </div>

        <script src="{{ asset('assets_js/sabores.js') }}"></script>

    </main>
    <footer>
        <p>Redes Sociales</p>
        <div class="Footer__Contenedor">
            <div class="Contenedor__Items1">
                <img src="{{ asset('recursos_index/facebook.png') }}" alt="Icono Facebook" title="Icono Facebook">
                <a href="#2">Facebook</a>
            </div>
            <div class="Contenedor__Items2">
                <img src="{{ asset('recursos_index/llamada-telefonica.png') }}" alt="Icono LLamada"
                    title="Icono Llamada">
                <a href="#2">+507 5211-0000</a>
            </div>
            <div class="Contenedor__Items1">
                <img src="{{ asset('recursos_index/instagram.png') }}" alt="Icono Instagram" title="Icono Instagram">
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
                <a href="#2">shirinie.ice@shirinie.net</a>
            </div>
        </div>
    </footer>
</body>

</html>
