<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChocoMint</title>
    <link rel="stylesheet" href="{{ asset('assets_css/helados/ChocoMint.css') }}">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
</head>

<body>

    @include('partials/navbar')

    <main>
        <div class="product-container">
            <div class="product-image">
                <img src="{{ asset('recursos_micarrito/Chocomenta.png') }}" alt="ChocoMint">
                <h1>ChocoMint</h1>
            </div>
            <div class="product-info">
                <p>
                    Disfruta de la refrescante combinación de chocolate y menta con nuestro helado ChocoMint.
                    Este delicioso helado está hecho con el mejor chocolate oscuro y un toque de menta fresca,
                    creando una experiencia única y revitalizante. Su textura suave y su sabor equilibrado
                    hacen de ChocoMint la elección perfecta para quienes buscan un postre refrescante y delicioso.
                </p>
                <button class="order-button"><a href="{{ route('Productos.micarrito') }}">Ordenar ahora</a></button>
            </div>
        </div>

    </main>

    @include('partials.footer')

</body>

</html>
