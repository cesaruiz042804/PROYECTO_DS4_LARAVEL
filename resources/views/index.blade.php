<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="description" content="Tienda online de helados.">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
    <link rel="stylesheet" href="{{ asset('assets_css/index.css') }}">
    <title>Shirini-E</title>
    <!--
    php -S localhost:8000 -t public
     
    -->
</head>

<body>

    @if (session()->has('partialsMessage') && session('partialsMessage') == 'ok')
        @include('partials.messageGood') <!-- Mensaje de exito -->
    @else
        @include('partials.messageErrors') <!-- Mensaje de error -->
    @endif

    @php
        session()->forget('partialsMessage'); // Elimina la variable 'partialMessage' de la sesión
    @endphp

    @include('partials.navbar')

    <main>
        <p><strong>Bienvenido</strong></p>
        <h1>SHIRINI-E</h1>
        <h2>Los mejores helados del west a un solo click</h2>
        <button><a href="{{ route('Productos.micarrito') }}">Ordenar Ahora</a></button>
        <img class="Contenedor-1" src="{{ asset('recursos_index/conoarriba.png') }} " alt="Cono de helado"
            title="Cono de helado">
        <div class="Contenedor-2">
            <img src="{{ asset('recursos_index/conofresa.png') }}" alt="Cono con helado de fresa"
                title="Cono con helado de fresa">
        </div>
    </main>

    @include('partials.footer')

</body>

</html>
