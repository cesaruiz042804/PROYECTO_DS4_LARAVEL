<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChocoWest</title>
    <link rel="stylesheet" href="{{ asset('assets_css/helados/ChocoWest.css') }}">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
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
                    Sumérgete en la intensa experiencia del <br>oeste con nuestro helado Chocowest.
                     Este <br>placer cremoso está hecho con el mejor <br>chocolate oscuro, mezclado con
                      generosos <br>trozos de chocolate crujiente y un toque de<br> caramelo salado,
                       evocando la esencia del <br>lejano oeste. Su textura suave y su sabor <br>profundo
                        crean una combinación perfecta <br>entre lo dulce y lo salado, ideal para los<br>
                         aventureros del sabor. ¡Chocowest es la <br>elección perfecta para quienes
                          buscan algo <br>más que un simple helado de chocolate!
                </p>
                <button class="order-button"><a href="{{ route('Productos.micarrito') }}">Ordenar ahora</a></button>
            </div>
        </div>
    
    </main>

    @include('partials.footer')
    
</body>
</html>