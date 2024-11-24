<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mani</title>
    <link rel="stylesheet" href="{{ asset('assets_css/helados/Mani.css') }}">
</head>
<body>
    
    @include('partials.navbar')

    <main>
        <div class="product-container">
            <div class="product-image">
                <img src="{{ asset('recursos_micarrito/mani.png') }}" alt="Mani">
                <h1>Mani</h1>
            </div>
            <div class="product-info">
                
                <p>
                    Disfruta del sabor profundo y la cremosidad <br>de nuestro
                     helado de maní, elaborado con <br>auténtica mantequilla de
                      maní para una <br>experiencia rica y suave. Cada bocado es<br> 
                      una combinación perfecta de dulzura y el <br>sabor distintivo 
                      del maní, con toques <br>salados que realzan su intensidad. 
                      Ideal <br>para los verdaderos amantes de este fruto<br> seco, 
                      nuestro helado de maní es el equilibrio <br>perfecto entre 
                      lo cremoso y lo crujiente. <br>¡Déjate seducir por
                       su irresistible sabor!

                    
                </p>
                <button class="order-button">Ordenar ahora</button>
            </div>
        </div>
    
    </main>

    @include('partials.footer')
    
</body>
</html>