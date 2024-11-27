<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tienda online de helados.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mani</title>
    <link rel="stylesheet" href="{{ asset('assets_css/helados/Mani.css') }}">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
</head>
<body>
    
    @include('partials.navbar')

    <main>
        <div class="product-container">
            <div class="product-image">
                <img src="{{ asset('recursos_micarrito/Mani.png') }}" alt="Mani">
                <h1>Mani</h1>
            </div>
            <div class="product-info">
                <p>
                    Disfruta del sabor profundo y la cremosidad de nuestro helado de Maní.
                    Este exquisito helado está hecho con maní tostado y caramelizado, ofreciendo una experiencia
                    única que te hará querer más. Perfecto para aquellos que buscan un postre indulgente y satisfactorio.
                </p>
                <button class="order-button"><a href="{{ route('Productos.micarrito') }}">Ordenar ahora</a></button>
            </div>
        </div>
    
    </main>

    @include('partials.footer')
    
</body>
</html>