<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tienda online de helados.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Carrito</title>
    <link rel="stylesheet" href="{{ asset('assets_css/micarrito.css') }}">
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
</head>

<body>

    @include('partials.navbar')

    <main class="MainPc">
        <div class="Contenedor__Carrito">
            <div class="Contenedor__CIzquierdo">
                <button class="FlechaArriba"><img src="{{ asset('recursos_micarrito/Felcha arriba.png') }}"></button>
                <div class="Contenedor__Carrusel">
                    <div class="Carrusel-Item item1">
                        <div class="Item-Img">
                            <img src="{{ asset('recursos_micarrito/Vainilla.png') }}" title="Helado de Vainilla"
                                alt="Helado de Vainilla">
                        </div>
                        <div class="Item-Descripcion">
                            <h2>Vainilla</h2>
                            <p>13.99$</p>
                        </div>
                    </div>

                    <div class="Carrusel-Item item2">
                        <div class="Item-Img">
                            <img src="{{ asset('recursos_micarrito/Chocomenta.png') }}" title="Helado de Chocomenta"
                                alt="Helado de Chocomenta">
                        </div>
                        <div class="Item-Descripcion">
                            <h2>ChocoMenta</h2>
                            <p>21.99$</p>
                        </div>
                    </div>

                    <div class="Carrusel-Item item3">
                        <div class="Item-Img">
                            <img src="{{ asset('recursos_micarrito/Chocolate.png') }}" title="Helado de Chocolate"
                                alt="Helado de Chocolate">
                        </div>
                        <div class="Item-Descripcion">
                            <h2>Chocolate</h2>
                            <p>15.99$</p>
                        </div>
                    </div>

                    <div class="Carrusel-Item item4">
                        <div class="Item-Img">
                            <img src="{{ asset('recursos_micarrito/Cereza.png') }}" title="Helado de Cereza"
                                alt="Helado de Cereza">
                        </div>
                        <div class="Item-Descripcion">
                            <h2>Cereza</h2>
                            <p>19.99$</p>
                        </div>
                    </div>

                    <div class="Carrusel-Item item5">
                        <div class="Item-Img">
                            <img src="{{ asset('recursos_micarrito/Cookies.png') }}" title="Helado de Cookie"
                                alt="Helado de Cookie">
                        </div>
                        <div class="Item-Descripcion">
                            <h2>Cookie</h2>
                            <p>15.99$</p>
                        </div>
                    </div>

                    <div class="Carrusel-Item item6">
                        <div class="Item-Img">
                            <img src="{{ asset('recursos_micarrito/Mani.png') }}" title="Helado de Maní"
                                alt="Helado de Maní">
                        </div>
                        <div class="Item-Descripcion">
                            <h2>Maní</h2>
                            <p>13.99$</p>
                        </div>
                    </div>
                </div>
                <button class="FlechaAbajo"><img src="{{ asset('recursos_micarrito/Flecha abajo.png') }}"></button>
            </div>
            <div class="Contenedor__CDerecho">
                <div class="CarruselDerecho">

                </div>
                <div class="CDerecho__Total">
                    <div class="Total-Text">
                        <h3>Tu carrito:</h3>
                        <p id="payValor" class="payValor">0$</p>
                    </div>
                    <div class="Total-button">
                        <a id="payButton" class="payButton">Pagar Ahora</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <main class="MainMovil">
        <div class="MainMovil__Contenedor">
            <div class="Contenedor__Item">
                <div class="Item--Tarjeta Item--1Movil">
                    <div class="Contenedor__Img">
                        <img src="{{ asset('recursos_micarrito/Vainilla.png') }}" alt="Helado de Vainilla"
                            title="Helado de Vainilla">
                    </div>
                    <div class="Contenedor__DescripcionYBotones">
                        <div class="Contenedor__Descripcion">
                            <h2>Vainilla</h2>
                            <p>13.99$</p>
                        </div>
                        <div class="Contenedor__Botones">
                            <button class="boton-restar">-</button>
                            <label class="contadorMovil">0</label>
                            <button class="boton-sumar">+</button>
                        </div>
                    </div>
                </div>

                <div class="Item--Tarjeta Item--2Movil">
                    <div class="Contenedor__Img">
                        <img src="{{ asset('recursos_micarrito/Chocomenta.png') }}" alt="Helado de chocomenta"
                            title="Helado de chocomenta">
                    </div>
                    <div class="Contenedor__DescripcionYBotones">
                        <div class="Contenedor__Descripcion">
                            <h2>ChocoMenta</h2>
                            <p>21.99$</p>
                        </div>
                        <div class="Contenedor__Botones">
                            <button class="boton-restar">-</button>
                            <label class="contadorMovil">0</label>
                            <button class="boton-sumar">+</button>
                        </div>
                    </div>
                </div>

                <div class="Item--Tarjeta Item--3Movil">
                    <div class="Contenedor__Img">
                        <img src="{{ asset('recursos_micarrito/Chocolate.png') }}" alt="Helado de Chocolate"
                            title="Helado de Chocolate">
                    </div>
                    <div class="Contenedor__DescripcionYBotones">
                        <div class="Contenedor__Descripcion">
                            <h2>Chocolate</h2>
                            <p>13.99$</p>
                        </div>
                        <div class="Contenedor__Botones">
                            <button class="boton-restar">-</button>
                            <label class="contadorMovil">0</label>
                            <button class="boton-sumar">+</button>
                        </div>
                    </div>
                </div>

                <div class="Item--Tarjeta Item--4Movil">
                    <div class="Contenedor__Img">
                        <img src="{{ asset('recursos_micarrito/Cereza.png') }}" alt="Helado de Cereza"
                            title="Helado de Cereza">
                    </div>
                    <div class="Contenedor__DescripcionYBotones">
                        <div class="Contenedor__Descripcion">
                            <h2>Cereza</h2>
                            <p>19.99$</p>
                        </div>
                        <div class="Contenedor__Botones">
                            <button class="boton-restar">-</button>
                            <label class="contadorMovil">0</label>
                            <button class="boton-sumar">+</button>
                        </div>
                    </div>
                </div>
                <div class="Item--Tarjeta Item--5Movil">
                    <div class="Contenedor__Img">
                        <img src="{{ asset('recursos_micarrito/Cookies.png') }}" alt="Helado de Cookies"
                            title="Helado de Cookies">
                    </div>
                    <div class="Contenedor__DescripcionYBotones">
                        <div class="Contenedor__Descripcion">
                            <h2>Cookies</h2>
                            <p>15.99$</p>
                        </div>
                        <div class="Contenedor__Botones">
                            <button class="boton-restar">-</button>
                            <label class="contadorMovil">0</label>
                            <button class="boton-sumar">+</button>
                        </div>
                    </div>
                </div>
                <div class="Item--Tarjeta Item--6Movil">
                    <div class="Contenedor__Img">
                        <img src="{{ asset('recursos_micarrito/Mani.png') }}" alt="Helado de Maní"
                            title="Helado de Maní">
                    </div>
                    <div class="Contenedor__DescripcionYBotones">
                        <div class="Contenedor__Descripcion">
                            <h2>Maní</h2>
                            <p>13.99$</p>
                        </div>
                        <div class="Contenedor__Botones">
                            <button class="boton-restar">-</button>
                            <label class="contadorMovil">0</label>
                            <button class="boton-sumar">+</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Contenedorr__Total">
                <div class="Total-Text">
                    <h3>Tu carrito:</h3>
                    <p id="payValor-movil" class="payValor">0$</p>
                </div>
                <div class="Total-button">
                    <a id="payButton-movil" class="payButton">Pagar Ahora</a>
                </div>
            </div>
        </div>
    </main>

    @include('partials.footer')

    <script src="{{ asset('assets_js/micarrito.js') }}"></script>
    <script src="{{ asset('assets_js/carritomovil.js') }}"></script>

    <script>
        function procesarPago(selectorValor, boton) {
            const valor = document.querySelector(selectorValor).innerText.replace('$', '');

            if (parseFloat(valor) === 0) {
                alert("Debe seleccionar al menos un producto");
            } else {
                // Enviar el valor usando AJAX a Laravel
                $.ajax({
                    url: "{{ route('Productos.micarrito.valor') }}",
                    type: "POST",
                    data: {
                        valor: valor, // Valor que se va enviar
                        _token: "{{ csrf_token() }}" // Incluye el token CSRF de Laravel
                    },
                    success: function(response) {
                        if (response.success) {
                            window.location.href = "{{ route('Productos.micarrito.metodoDePago') }}";
                        } else {
                            alert('Error en el procesamiento del dato');
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Error al procesar el pago');
                    }
                });
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Botón para escritorio
            const payButton = document.querySelector('.payButton');
            if (payButton) {
                payButton.addEventListener('click', function() {
                    procesarPago('.payValor', payButton);
                });
            }

            // Botón para móvil
            const payButtonMovil = document.querySelector('#payButton-movil');
            if (payButtonMovil) {
                payButtonMovil.addEventListener('click', function() {
                    procesarPago('#payValor-movil', payButtonMovil);
                });
            }
        });
    </script>
</body>

</html>
