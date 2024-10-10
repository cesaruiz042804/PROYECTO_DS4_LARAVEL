<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Carrito</title>
    <link rel="stylesheet" href="{{ asset('assets_css/micarrito.css') }}">
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js') }}"></script>

</head>

<body>
    <header>
        <nav class="header__nav">
            <button id="MenuHamburguesa"><img src= "{{ asset('recursos_index/Icon.png') }}" alt="Menu"
                    title="Menu"></button>
            <img src="{{ asset('recursos_index/Logo Shirine.png') }}" alt="Logo Shirini-E" title="SHIRINI-E">
            <a class="header-a" href="{{ route('Shirini-e/index.php') }}">SHIRINI-E</a>
            <ul class="header__nav-list">
                <li><a class="nav__list-a" href="{{ route('Shirini-e/index.php') }}">Inicio</a></li>
                <li><a class="nav__list-a" href="{{ route('Productos/sabores.php') }}">Sabores</a></li>
                <li><a class="nav__list-a" href="#">Soporte al cliente</a></li>
                <li><a class="nav__list-a" href="{{ route('Productos/micarrito.php') }}">Mi carrito</a></li>
                <li><a class="nav__list-a enlaceLogin" href="{{ route('Iniciar-Sesion.php') }}">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <nav class="Header__NavegadorSecundario" id="MenuSecundario">
        <ul class="header__nav-listSecundario">
            <li><a class="navSecundario__list-a" href="{{ route('Shirini-e/index.php') }}">Inicio</a></li>
            <li><a class="navSecundario__list-a" href="{{ route('Productos/sabores.php') }}">Sabores</a></li>
            <li><a class="navSecundario__list-a" href="#">Soporte al cliente</a></li>
            <li><a class="navSecundario__list-a" href="{{ route('Productos/micarrito.php') }}">Mi carrito</a></li>
            <li><a class="nav__list-a enlaceLogin" href="{{ route('Iniciar-Sesion.php') }}">Iniciar Sesión</a></li>
        </ul>
    </nav>
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
                            <p>15.99$</p>
                        </div>
                    </div>

                    <div class="Carrusel-Item item5">
                        <div class="Item-Img">
                            <img src="{{ asset('recursos_micarrito/Cereza.png') }}" title="Helado de Cookie"
                                alt="Helado de Cookie">
                        </div>
                        <div class="Item-Descripcion">
                            <h2>Cookie</h2>
                            <p>15.99$</p>
                        </div>
                    </div>

                    <div class="Carrusel-Item item6">
                        <div class="Item-Img">
                            <img src="{{ asset('recursos_micarrito/Cereza.png') }}" title="Helado de Maní"
                                alt="Helado de Maní">
                        </div>
                        <div class="Item-Descripcion">
                            <h2>Maní</h2>
                            <p>15.99$</p>
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
                        <p id="payValor">0$</p>
                    </div>
                    <div class="Total-button">
                        <a href="#" id="payButton">Pagar Ahora</a>
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
                            <p>15.99$</p>
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
                        <img src="{{ asset('recursos_micarrito/Mani.png') }}" title="Helado de Maní"
                                alt="Helado de Maní">
                    </div>
                    <div class="Contenedor__DescripcionYBotones">
                        <div class="Contenedor__Descripcion">
                            <h2>Cookie</h2>
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
                        <img src="{{ asset('recursos_micarrito/Cookies.png') }}" title="Helado de Cookie"
                                alt="Helado de Cookie">
                    </div>
                    <div class="Contenedor__DescripcionYBotones">
                        <div class="Contenedor__Descripcion">
                            <h2>Cookie</h2>
                            <p>15.99$</p>
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
                    <p id="payValor">0$</p>
                </div>
                <div class="Total-button">
                    <a id="payButton">Pagar Ahora</a>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>Redes Sociales</p>
        <div class="Footer__Contenedor">
            <div class="Contenedor__Items1">
                <img src="{{ asset('recursos_index/facebook.png') }}" alt="Icono Facebook" title="Icono Facebook">
                <a href="#2">Facebook</a>
            </div>
            <div class="Contenedor__Items2">
                <img src="{{ asset('recursos_index/llamada-telefonica.png') }}" alt="Icono LLamada"
                    title="Icono Llamada">
                <a href="#2">+507 5211-0000</a>
            </div>
            <div class="Contenedor__Items1">
                <img src="{{ asset('recursos_index/instagram.png') }}" alt="Icono Instagram"
                    title="Icono Instagram">
                <a href="#2">Instagram</a>
            </div>
            <div class="Contenedor__Items2">
                <img src="{{ asset('recursos_index/ubicacion.png') }}" alt="Icono Ubicacion">
                <a href="#2">Avenida J Alfaro, Local 9</a>
            </div>
            <div class="Contenedor__Items1">
                <img src="{{ asset('recursos_index/x.png') }}" alt="Icono X" title="Icono X">
                <a href="#2">X</a>
            </div>
            <div class="Contenedor__Items2">
                <img src="{{ asset('recursos_index/correo.png') }}" alt="Icono Correo" title="Icono Correo">
                <a href="#2">shirinie.ice@shirinie.net</a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets_js/micarrito.js') }}"></script>
    <script type="module" src="{{ asset('assets_js/carritomovil.js') }}"></script>

    <script>
        const payButton = document.getElementById('payButton');
        payButton.addEventListener('click', function() {
            const valor = document.getElementById('payValor').innerText.replace('$', '');

            if (parseFloat(valor) === 0) {
                alert("Debe seleccionar al menos un producto");
            } else {
                // Enviar el valor usando AJAX a Laravel
                $.ajax({
                    url: "{{ route('Productos.micarrito.valor') }}", // Ruta al controlador que guarda el dato en una session
                    type: "POST", // Método de envío
                    data: {
                        valor: valor, // Valor que se va enviar
                        _token: "{{ csrf_token() }}" // Incluye el token CSRF de Laravel
                    },
                    success: function(response) {

                        if (response.success) { // Verifica si la respuesta fue exitosa

                            window.location.href =
                            "{{ route('Productos.micarrito.metodoDePago') }} "; // Redirige al usuario a la página deseada con el valor en la URL
                        } else {
                            alert('Error en el procesamiento del dato');
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Error al procesar el pago');
                    }
                });
            }
        });
    </script>
</body>

</html>
