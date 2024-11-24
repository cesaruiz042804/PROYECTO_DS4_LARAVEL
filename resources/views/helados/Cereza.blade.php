<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
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
                <img src="{{ asset('recursos_micarrito/cereza.png') }}" alt="Helado de Cereza">
                <h1>Cereza</h1>
            </div>
            <div class="product-info">
                <p>
                    Disfruta de la frescura y el sabor vibrante de <br>nuestro helado de cereza, 
                    hecho con <br> jugosas cerezas naturales que aportan un <br>toque dulce y ligeramente
                     ácido. Su textura <br>cremosa y suave se complementa con<br> pequeños trozos de cereza
                      que estallan en <br>cada bocado, creando una experiencia <br>refrescante y deliciosa.
                       Perfecto para <br>quienes buscan un helado frutal lleno de<br> color y sabor. 
                    ¡Un capricho irresistible para <br>cualquier ocasión!        
                </p>
                <button class="order-button"><a href="{{ route('Productos.micarrito') }}">Ordenar ahora</a></button>
            </div>
        </div>
    </main>

    @include('partials.footer')
    
</body>
</html>