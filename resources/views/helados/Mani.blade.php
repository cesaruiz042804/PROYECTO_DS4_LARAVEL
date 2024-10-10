<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mani</title>
    <link rel="stylesheet" href="{{ asset('assets_css/helados/Mani.css') }}">
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
        <div class="product-container">
            <div class="product-image">
                <img src="{{ asset('recursos_micarrito/mani.png') }}" alt="Mani">
                <h1>Mani</h1>
            </div>
            <div class="product-info">
                
                <p>
                    Disfruta del sabor profundo y la cremosidad <br>de nuestro
                     helado de maní, elaborado con <br>auténtica mantequilla de
                      maní para una <br>experiencia rica y suave. Cada bocado es<br> 
                      una combinación perfecta de dulzura y el <br>sabor distintivo 
                      del maní, con toques <br>salados que realzan su intensidad. 
                      Ideal <br>para los verdaderos amantes de este fruto<br> seco, 
                      nuestro helado de maní es el equilibrio <br>perfecto entre 
                      lo cremoso y lo crujiente. <br>¡Déjate seducir por
                       su irresistible sabor!

                    
                </p>
                <button class="order-button">Ordenar ahora</button>
            </div>
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