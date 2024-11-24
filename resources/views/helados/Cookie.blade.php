<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
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
                <img src="{{ asset('recursos_micarrito/cookies.png') }}" alt="Cookie">
                <h1>Cookie</h1>
            </div>
            <div class="product-info">
                
                <p>
                    Sumérgete en la deliciosa combinación de <br>cremosidad y
                     crujiente con nuestro helado<br> de Cookies 'n Cream. Este
                      clásico irresistible<br> mezcla una base de helado suave y<br>
                       cremosa con generosos trozos de galletas <br>de chocolate, 
                       creando una experiencia<br> indulgente en cada cucharada.
                        Perfecto<br> para los amantes de lo dulce y lo crujiente,<br>
                         este helado es la fusión perfecta entre <br>textura y sabor. 
                         ¡Un placer que no podrás <br>dejar de disfrutar
                </p>
                <button class="order-button"><a href="{{ route('Productos.micarrito') }}">Ordenar ahora</a></button>
            </div>
        </div>
    
    </main>

    @include('partials.footer')
    
</body>
</html>