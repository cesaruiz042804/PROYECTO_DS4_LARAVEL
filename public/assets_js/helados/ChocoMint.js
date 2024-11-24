<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChocoMint</title>
    <link rel="stylesheet" href="{{ asset('assets_css/helados/ChocoMint.css') }}">
</head>

<body>

    @include('partials/navbar')

    <main>
        <div class="product-container">
            <div class="product-image">
                <img src="{{ asset('recursos_micarrito/chocomenta.png') }}" alt="ChocoMint">
                <h1>ChocoMint</h1>
            </div>
            <div class="product-info">

                <p>
                    Fresca y deliciosa, nuestra combinación de <br> chocolate y menta es el equilibrio perfecto
                    <br>entre lo cremoso y lo refrescante. El helado <br>de chocomenta está hecho con auténtico
                    <br>extracto
                    de menta y trozos crujientes de<br> chocolate oscuro, creando una experiencia <br>de sabor que te
                    dejará con ganas de más.<br> Cada cucharada te
                    envuelve en un<br> contraste único de frescura y dulzura, ideal<br>
                    para los amantes de sabores vibrantes. <br>¡Déjate llevar por la irresistible fusión de <br>menta y
                    chocolate!


                </p>
                <button class="order-button">Ordenar ahora</button>
            </div>
        </div>

    </main>
    
    @include('partials.footer')
    
</body>

</html>
