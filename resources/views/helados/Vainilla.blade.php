<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Tienda online de helados.">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
    <link rel="stylesheet" href="{{ asset('assets_css/helados/Vainilla.css') }}">
    <title>Vainilla</title>
</head>

<body>

    @include('partials.navbar')

    <main>
        <div class="product-container">
            <div class="product-image">
                <img src="{{ asset('recursos_micarrito/Vainilla.png') }}" alt="Vainilla">
                <h1>Vainilla</h1>
            </div>
            <div class="product-info">
                <p>
                    Descubre la suavidad y el sabor auténtico de nuestro helado de vainilla. Elaborado con vainilla
                    natural,
                    este helado ofrece una experiencia clásica y deliciosa que nunca pasa de moda. Perfecto para
                    aquellos que
                    buscan un postre sencillo pero exquisito.
                </p>
                <button class="order-button"><a href="{{ route('Productos.micarrito') }}">Ordenar ahora</a></button>
            </div>
        </div>
    </main>

    @include('partials.footer')

</body>

</html>
