<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tienda online de helados.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabores</title>
    <link rel="stylesheet" href="{{ asset('assets_css/sabores.css') }}">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
</head>

<body>
  
    @include('partials.navbar')

    <main>
        <div class="search-bar">
            <input type="text" id="search" class="search" placeholder="Buscar...">
            <button><i class="fa fa-search"></i></button>
        </div>
        <div class="carousel">
            <button class="prev">&#10094;</button>
            <div class="carousel-items">
                <div class="carousel-item" data-name="Vainilla">
                    <a href="{{ route('Helados.Vainilla') }}">
                        <img src="{{ asset('recursos_carrusel/vainilla.png') }}" alt="Vainilla">
                    </a>
                    <p>Vainilla</p>
                    <p>$13.99</p>
                </div>
                <div class="carousel-item" data-name="ChocoMint">
                    <a href="{{ route('Helados.ChocoMint') }}">
                        <img src="{{ asset('recursos_carrusel/chocomint.png') }}" alt="ChocoMint">
                    </a>
                    <p>ChocoMint</p>
                    <p>$21.99</p>
                </div>
                <div class="carousel-item" data-name="ChocoWest">
                    <a href="{{ route('Helados.ChocoWest') }}">
                        <img src="{{ asset('recursos_carrusel/chocowest.png') }}" alt="ChocoWest">
                    </a>
                    <p>ChocoWest</p>
                    <p>$15.99</p>
                </div>
                <div class="carousel-item" data-name="Cereza">
                    <a href="{{ route('Helados.Cereza')}}">
                        <img src="{{ asset('recursos_carrusel/cereza.png') }}" alt="Cereza">
                    </a>
                    <p>Cereza</p>
                    <p>$15.99</p>
                </div>
                <div class="carousel-item" data-name="Cookie">
                    <a href="{{ route('Helados.Cookie') }}">
                        <img src="{{ asset('recursos_carrusel/cookies.png') }}" alt="Cookie">
                    </a>
                    <p>Cookie</p>
                    <p>$16.75</p>
                </div>
                <div class="carousel-item" data-name="Mani">
                    <a href="{{ route('Helados.Mani') }}">
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
      
    @include('partials.footer')

</body>

</html>
