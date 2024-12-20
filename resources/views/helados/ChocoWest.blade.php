<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Tienda online de helados.">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
    <link rel="stylesheet" href="{{ asset('assets_css/helados/ChocoWest.css') }}">
    <title>ChocoWest</title>
</head>

<body>

    @include('partials.navbar')

    <main>
        <div class="product-container">
            <div class="product-image">
                <img src="{{ asset('recursos_micarrito/Chocolate.png') }}" alt="ChocoWest">
                <h1>ChocoWest</h1>
            </div>
            <div class="product-info">
                <p>
                    Sumérgete en la intensa experiencia del oeste con nuestro helado Chocowest.
                    Este placer cremoso está hecho con el mejor chocolate oscuro, mezclado con
                    generosos trozos de chocolate crujiente y un toque de caramelo salado,
                    evocando la esencia del lejano oeste. Su textura suave y su sabor profundo
                    crean una combinación perfecta entre lo dulce y lo salado, ideal para los
                    aventureros del sabor. ¡Chocowest es la elección perfecta para quienes
                    buscan algo más que un simple helado de chocolate!
                </p>
                <button class="order-button"><a href="{{ route('Productos.micarrito') }}">Ordenar ahora</a></button>
            </div>
        </div>

    </main>

    @include('partials.footer')

</body>

</html>
