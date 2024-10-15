<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso de Pago</title>
    <link rel="stylesheet" href="{{ asset('assets_css/metodoDePago.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets_css/load.css') }} "> <!-- Estilo para el div del loading que esta oculto-->
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://js.stripe.com/v3/"></script>

</head>

<body>
    <header>
        <nav class="header__nav">
            <img src="{{ asset('recursos_index/Logo Shirine.png') }}" alt="Logo Shirini-E" title="SHIRINI-E">
            <a class="header-a" href="{{ route('Shirini-e/index.php') }}">SHIRINI-E</a>
            <ul class="header__nav-list">
                <li><a class="nav__list-a" href="{{ route('Shirini-e/index.php') }}">Inicio</a></li>
                <li><a class="nav__list-a" href="{{ route('Productos/sabores.php') }}">Sabores</a></li>
                <li><a class="nav__list-a" href="{{ route('Soporte.php') }}">Soporte al cliente</a></li>
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
                <input type="hidden" name='amount' id='amount' value="{{ $valor }}" style="display: none;">
                <!-- Esto es para guardar el precio de la compra -->
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
                    <label for="CVV">CVC</label>
                    <div id="CVV"></div>
                </div>

                <div>
                    <label for="NombreTarjeta">Títular de la tarjeta</label>
                    <div>
                        <input type="text" placeholder="Nombre como aparece en la tarjeta" name="NombreTarjeta"
                            id="NombreTarjeta">
                    </div>
                </div>
                <div>
                    <label for="Correo">Correo eléctronico</label>
                    <div>
                        <input type="text" placeholder="Correo para enviar factura" name="Correo" id="Correo">
                    </div>
                </div>
                <p>Al hacer clic en el botón «Realizar Pedido», aceptas nuestros Términos de uso y nuestra Declaración
                    de privacidad, declaras que tienes más de 18 años y aceptas que u pedido se ha realizado de forma
                    eficaz.</p>
                <div class="ContenedroTarjeta-BotonesDePagar">
                    <div class="InfoTarjeta-Cambiar">
                        <a href = '{{ route('Productos/micarrito.php') }}'>{{ $valor }} $ cambiar</a>
                    </div>
                    <div class="InfoTarjeta-Pagar">
                        <button onclick="createToken()" class="btnForm">Realizar Pedido</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="main-container-loading" style="display: none;">
            <div class="container-loading"> <!-- El script para que se vea esto se enceuntra en metodoDePago.js-->
                <div class="cubo">
                    <label>SHIRINI-E</label>
                </div>
                <div class="loading">
                    <h2>Por favor, espere mientras se procesa su solicitud.</h2>
                    <p>Cargando...</p>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer-footer"> <!-- Le puse esto para poder eliminar completamente el footer-->
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="{{ asset('assets_js/metodoDePago.js') }}"></script>

    <script>

        try {
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



            const formulario = document.querySelector('.ContenedorTarjeta-InfoTarjetas');
            let formSend = false;
            let emailSend = false;

            formulario.addEventListener('submit', (event) => {
                event.preventDefault();
                if (!formSend) { // Esto evita que se haga máss de un envío de datos del formulario
                    createToken();
                }
            });

            function createToken() {
                formSend = true; // Esto evita que se haga máss de un envío de datos al servidor
                console.log('CreateToken');
                if (verificarElementosStripeVacios()) {
                    alertMessage('Por favor, llena todos los campos.');
                } else {

                    validateEmail().then(isValid => {
                        if (isValid) {
                            stripe.createToken(cardNumberElement).then(function(
                                result) { // Crea el token usando los elementos de la tarjeta
                                if (result.error) { // Manejar error
                                    alertMessage(result.error
                                        .message
                                    ); // Muestra un mensaje de error (se hace uso de librería de alerta de animación)
                                }

                                if (result.token) { // Si se creó el token exitosamente
                                    const btn = document.querySelector('.btnForm');
                                    //btn.disabled = true;
                                    displayLoading
                                        (); // Esto hace que se quite el footer, header y así hace que se muestre los mensajes de las tarjetas
                                    document.getElementById("stripe-token-id").value = result.token
                                        .id; // Aquí es donde se envía la clave del id del token, sin esto no funcionaría esto
                                    console.log('Formulario enviado');
                                    document.getElementById('checkout-form')
                                        .submit(); // Envía el formulario
                                }
                            });
                        }
                    });
                }
            }


            let cardNumberEmpty = true;
            let cardCvcEmpty = true;
            let cardExpiryEmpty = true;
            let nombreEmpty = true;
            let emailEmpty = true;

            cardNumberElement.on('change', function(event) {
                cardNumberEmpty = event.empty;
            });

            cardCvcElement.on('change', function(event) {
                cardCvcEmpty = event.empty;
            });

            cardExpiryElement.on('change', function(event) {
                cardExpiryEmpty = event.empty;
            });

            document.getElementById('NombreTarjeta').addEventListener('change', function(event) {
                nombreEmpty = event.target.value.trim() === '';
            });

            document.getElementById('Correo').addEventListener('change', function(event) {
                emailEmpty = event.target.value.trim() === '';
            });

            function verificarElementosStripeVacios() { // Verifica si los input están vacíos
                if (cardNumberEmpty || cardCvcEmpty || cardExpiryEmpty || nombreEmpty || emailEmpty) {
                    console.log('Campos vacios');
                    return true;
                } else {
                    console.log('Todos los campos están llenos.');
                    return false;
                }
            }

            function validateEmail() {
                return new Promise((resolve, reject) => {
                    const email = $('#Correo').val(); // Se obtiene el valor del input de correo

                    $.ajax({
                        url: "{{ route('verify-email-domain') }}",
                        type: 'POST',
                        contentType: 'application/json',
                        data: JSON.stringify({
                            Correo: email // Aquí se envía el correo
                        }),
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content'
                                    ) // Esto mantiene la seguridad de los datos enviados al servidor
                        },
                        success: function(data) { // Maneja la respuesta del servidor, si es válido o no
                            if (data.valid) {
                                console.log('Correo válido');
                                resolve(true); // Resolvemos la promesa con true
                            } else {
                                alertMessage(data.message);
                                console.log('Entra error uno')
                                return; // Resolvemos la promesa con false
                            }
                        },
                        error: function(xhr) {
                            if (xhr.status === 422) { // Manejo de errores de validación
                                //alertMessage(errorMessage || 'Ocurrió un error inesperado.');
                                resolve(false); // Resolvemos la promesa con false
                            } else {
                                //alertMessage('Ocurrió un error inesperado. Por favor, inténtalo de nuevo.');
                                resolve(false); // Resolvemos la promesa con false
                            }
                        }
                    });
                });
            }

        } catch (error) {
            alertMessage(error);
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
