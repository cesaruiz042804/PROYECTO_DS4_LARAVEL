<link rel="stylesheet" href="{{ asset('assets_css/partials/navbar.css') }}">

<header>
    <nav class="header__nav">
        <img id="ImgLogo" src="{{ asset('recursos_index/Logo Shirine.png') }}" alt="Logo Shirini-E" title="SHIRINI-E">
        <a class="header-a" href="{{ route('index') }}">SHIRINI-E</a>
        <button id="MenuHamburguesa"><img src="{{ asset('recursos_index/Icon.png') }}" alt="Menu"
                title="Menu"></button>
        <ul class="header__nav-list">
            <li><a class="nav__list-a" href="{{ route('index') }}">Inicio</a></li>
            <li><a class="nav__list-a" href="{{ route('Productos.sabores') }}">Sabores</a></li>
            <li><a class="nav__list-a" href="{{ route('Productos.micarrito') }}">Mi carrito</a></li>
            <li><a class="nav__list-a" href="{{ route('Soporte') }}">Soporte al cliente</a></li>
            @if (session()->has('user'))
                <li><a class="nav__list-a enlaceLogin" href="{{ route('Iniciar-Sesion') }}">Cerrar Sesión</a></li>
            @else
                <li><a class="nav__list-a enlaceLogin" href="{{ route('Iniciar-Sesion') }}">Iniciar Sesión</a></li>
            @endif
        </ul>
    </nav>
</header>

<nav class="Header__NavegadorSecundario" id="MenuSecundario">
    <ul class="header__nav-listSecundario">
        <li><a class="navSecundario__list-a" href="{{ route('index') }}">Inicio</a></li>
        <li><a class="navSecundario__list-a" href="{{ route('Productos.sabores') }}">Sabores</a></li>
        <li><a class="navSecundario__list-a" href="{{ route('Productos.micarrito') }}">Mi carrito</a></li>
        <li><a class="navSecundario__list-a" href="{{ route('Soporte') }}">Soporte al cliente</a></li>
        @if (session()->has('user'))
            <li><a class="nav__list-a enlaceLogin" href="{{ route('Iniciar-Sesion') }}">Cerrar Sesión</a></li>
        @else
            <li><a class="nav__list-a enlaceLogin" href="{{ route('Iniciar-Sesion') }}">Iniciar Sesión</a></li>
        @endif
    </ul>
</nav>

<script src="{{ asset('assets_js/partials/navbar.js') }}"></script>
