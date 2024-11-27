<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tienda online de helados.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>\
    <link rel="stylesheet" href="{{ asset('assets_css/helados/Cookie.css') }}">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
</head>
<body>
    
    @include('partials.navbar')

    <main>
        <div class="product-container">
            <div class="product-image">
                <img src="{{ asset('recursos_micarrito/Cookies.png') }}" alt="Cookie">
                <h1>Cookie</h1>
            </div>
            <div class="product-info">
                <p>
                    Sumérgete en la deliciosa combinación de cremosidad y crujiente con nuestro helado de Cookie.
                    Este exquisito helado está hecho con trozos de galleta de chocolate, ofreciendo una experiencia
                    única que te hará querer más. Perfecto para aquellos que buscan un postre indulgente y satisfactorio.
                </p>
                <button class="order-button"><a href="{{ route('Productos.micarrito') }}">Ordenar ahora</a></button>
            </div>
        </div>
    
    </main>

    @include('partials.footer')
    
</body>
</html>