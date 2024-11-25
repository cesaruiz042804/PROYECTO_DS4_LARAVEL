<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vainilla</title>
    <link rel="stylesheet" href="{{ asset('assets_css/helados/Vainilla.css') }}">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
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
                    Descubre la suavidad y el sabor auténtico <br> de nuestro helado de vainilla. Elaborado con
                    <br>vainilla
                    natural,
                    cada bocado es una <br> explosión de cremosidad y dulzura que te <br> transportará a momentos de
                    pura
                    <br> indulgencia.
                    Perfecto para disfrutar solo o <br> acompañado de tus toppings favoritos, este <br> clásico siempre
                    es
                    una elección acertada.<br>
                    ¡Frescura, sabor y calidad en cada <br> cucharada!

                </p>
                <button class="order-button"><a href="{{ route('Productos.micarrito') }}">Ordenar ahora</a></button>
            </div>
        </div>
    </main>

    @include('partials.footer')
    
    <!--
        <script type="module" src="{ asset('assets_js/helados/Vainilla.js') }}"></script>
    -->


</body>

</html>
