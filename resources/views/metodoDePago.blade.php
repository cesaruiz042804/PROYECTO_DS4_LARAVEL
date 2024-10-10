<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de Pago</title>
    <link rel="stylesheet" href="{{ asset('assets_css/metodoDePago.css') }} ">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/imask/7.6.1/imask.min.js"></script> <!-- Esto es una biblioteca para crear una mascara-->
</head>

<body>
    <header>
        <nav class="header__nav">
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
    <main>
        <div class="Main__ContenedorTarjeta">
            <div class="ContenedorTarjeta-ImgTarjetas">
                <img src="{{ asset('recursos_metodoDePago/MASTERCARD.png') }}" title="MASTERCARD" alt="MASTERCARD">
                <img src="{{ asset('recursos_metodoDePago/AMEX.png') }}" title="MASTERCARD" alt="AMEX">
                <img src="{{ asset('recursos_metodoDePago/VISA.png') }}" title="MASTERCARD" alt="VISA">
            </div>

            <form class="ContenedorTarjeta-InfoTarjetas" id="checkout-form" action="{{ route('stripe.Payment') }}"
                method="POST">
                @csrf
                <input type="hidden" name='stripeToken' id='stripe-token-id'>
                <!-- Esto es importante, ya que sin eso no se puede crear el token-->
                <h3>Configura tu tarjeta de crédito o débito</h3>
                <div>
                    <label for="NumeroTarjeta">Número de tarjera</label>
                    <div id="NumeroTarjeta"></div>
                </div>

                <div>
                    <label for="FechaVencimiento">Fecha de vencimiento</label>
                    <div id="FechaVencimiento"></div>
                </div>

                <div>
                    <label for="CVV">CVV</label>
                    <div id="CVV"></div>
                </div>

                <div>
                    <label for="NombreTarjeta">Nombre de la tarjeta</label>
                    <div>
                        <input type="text" placeholder="Nombre como aparece en la tarjeta" id="NombreTarjeta">
                    </div>
                </div>
                <div>
                    <label for="Correo">Correo</label>
                    <div>
                        <input type="email" placeholder="Correo para enviar factura" id="Correo">
                    </div>
                </div>
                <p>Al hacer clic en el botón «Realizar Pedido», aceptas nuestros Términos de uso y nuestra Declaración
                    de privacidad, declaras que tienes más de 18 años y aceptas que tu pedido se ha realizado de forma
                    eficaz.</p>
                <div class="ContenedroTarjeta-BotonesDePagar">
                    <div class="InfoTarjeta-Cambiar">
                        <a href = '{{ route('Productos/micarrito.php') }}'>{{ $valor }} $ cambiar</a>
                    </div>
                    <div class="InfoTarjeta-Pagar">
                        <button type="submit" onclick="createToken()">Realizar Pedido</button>
                    </div>
                </div>
            </form>
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
                <img src="{{ asset('recursos_index/instagram.png') }}" alt="Icono Instagram" title="Icono Instagram">
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

    <script src="https://js.stripe.com/v3/"></script>
    
    <script type="text/javascript">
        const v = document.querySelector('.ContenedroTarjeta-BotonesDePagar a');
        console.log(v.textContent);
        var stripe = Stripe('{{ env('STRIPE_KEY') }}'); // Reemplaza con tu clave pública de Stripe
        const elements = stripe.elements();

        const style = {
            base: {
                color: '#000',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSize: '16px',
                '::placeholder': {
                    color: '#757574',
                },
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a',
            },
            complete: {
                color: '#133b13', // Estilo cuando la entrada es válida
            },
        };

        // Esto es para darle estilo a los elementos
        const cardNumberElement = elements.create('cardNumber', {
            style,
            placeholder: 'XXXX XXXX XXXX XXXX' // Placeholder personalizado
        });
        const cardCvcElement = elements.create('cardCvc', {
            style
        });
        const cardExpiryElement = elements.create('cardExpiry', {
            style
        });

        // En esta parte se montan los elementos de la tarjeta en los div seleccionados
        cardNumberElement.mount('#NumeroTarjeta');
        cardCvcElement.mount('#CVV');
        cardExpiryElement.mount('#FechaVencimiento');

        function createToken() {
            // Crea el token usando los elementos de la tarjeta
            stripe.createToken(cardNumberElement).then(function(result) {
                if (result.error) { // Manejar error
                    alert(result.error.message); // Mensaje de error
                    return; // Salir si hay error
                }

                // Si se creó el token exitosamente
                if (result.token) {
                    document.getElementById("stripe-token-id").value = result.token.id; // Aquí es donde se envía la clave del id del token
                    // Sin esto no funcionaría esto
                    document.getElementById('checkout-form').submit(); // Envía el formulario
                }
            });
        }

        /*
        Funcionamiento de esto:
        CVV y Fecha de Expiración no se necesita enviar explícitamente el CVV y la fecha de expiración
         a tu servidor. Estos estám incluidos en el proceso de creación del token.
        El token que recibes es suficiente para realizar el cargo, y contiene la información 
        necesaria para procesar el pago sin exponer los datos sensibles.
        Todo esto se hace simplemente para evitar almacenar datos sensibles.
        Al usar Stripe, los datos sensibles de la tarjeta (incluido el CVV y la fecha de expiración) 
        nunca tocan lo que es el servidor. 
        */
    </script>

</body>

</html>
