<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tienda online de helados.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cereza</title>
    <link rel="stylesheet" href="{{ asset('assets_css/helados/Cereza.css') }}">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
</head>
<body>

    @include('partials.navbar')

    <main>
        <div class="product-container">
            <div class="product-image">
                <img src="{{ asset('recursos_micarrito/Cereza.png') }}" alt="Helado de Cereza">
                <h1>Cereza</h1>
            </div>
            <div class="product-info">
                <p>
                    Sumérgete en la deliciosa experiencia de nuestro helado de Cereza. Este exquisito helado está hecho con cerezas frescas y jugosas,
                    ofreciendo un sabor dulce y refrescante que te transportará a un verano eterno. Perfecto para aquellos que buscan un postre
                    frutal y refrescante.
                </p>
                <button class="order-button"><a href="{{ route('Productos.micarrito') }}">Ordenar ahora</a></button>
            </div>
        </div>
    </main>

    @include('partials.footer')
    
</body>
</html>