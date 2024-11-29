<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Tienda online de helados.">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
    <link rel="stylesheet" href="{{ asset('assets_css/soporte.css') }}">
    <title>Soporte al cliente</title>
</head>

<body>
    <!-- Aqui falto el otro nav - no la hicieron -->
    @include('partials.navbar')

    <main>
        <div class="container">
            <div class="numero1-">
                <h1>Preguntas y respuestas</h1>
                <ul>
                    <li>
                        1. ¿Cuáles son los métodos de pago aceptados?
                        <p>Aceptamos pagos con tarjetas de crédito y débito (Visa, MasterCard, American Express) y otros métodos de pago disponibles en nuestra plataforma. Todos los pagos son procesados de forma segura.</p>
                    </li>
                    <li>
                        2. ¿Cómo puedo hacer un pedido?
                        <p>Para hacer un pedido, simplemente navega por nuestro catálogo de productos, añade tus artículos al carrito y sigue los pasos de pago. Una vez completada la compra, recibirás una confirmación por correo electrónico.</p>
                    </li>
                    <li>
                        3. ¿Cuánto tarda en llegar mi pedido?
                        <p>El tiempo de entrega varía según la ubicación. Los envíos locales suelen tardar entre 2 y 4 horas. Para zonas más alejadas, el tiempo puede extenderse a 1-3 días hábiles. Te notificaremos una vez que tu pedido esté en camino.</p>
                    </li>
                    <li>
                        4. ¿Ofrecen envíos a domicilio?
                        <p>Sí, realizamos envíos a domicilio dentro de [área/localidad]. Las tarifas de envío se calculan en función de la ubicación de entrega y se mostrarán antes de completar el pedido.</p>
                    </li>
                    <li>
                        5. ¿Puedo cambiar o cancelar mi pedido después de haberlo hecho?
                        <p>Dado que nuestros productos son frescos y hechos a pedido, no podemos aceptar cancelaciones o cambios una vez que el pedido ha sido confirmado. Sin embargo, si tienes un problema con tu pedido, contáctanos lo antes posible y haremos nuestro mejor esfuerzo por ayudarte.</p>
                    </li>
                    <li>
                        6. ¿Qué hago si mi pedido llega incorrecto o dañado?
                        <p>Si recibes un producto incorrecto o dañado, por favor, contáctanos dentro de las 24 horas siguientes a la recepción del pedido. Envíanos fotos del producto junto con tu número de pedido, y evaluaremos el caso para ofrecerte una solución.</p>
                    </li>
                    <li>
                        7. ¿Tienen productos aptos para personas con alergias alimentarias?
                        <p>Sí, contamos con productos libres de gluten, lactosa y otros alérgenos comunes. Sin embargo, te recomendamos que consultes las descripciones de los productos o nos contactes directamente para más información sobre alérgenos específicos.</p>
                    </li>
                    <li>
                        8. ¿Ofrecen opciones personalizadas o pedidos especiales?
                        <p>Sí, podemos hacer helados y postres personalizados para eventos especiales. Contáctanos con antelación para discutir tus necesidades y diseñar el producto perfecto para ti.</p>
                    </li>
                </ul>
            </div>
            
            <div class="terminos-condiciones">
                <h1>Términos y condiciones</h1>
                <div class="numero1">
                    <p class="borderleft">1. General</p>
                    <p>1.1. Estos términos y condiciones regulan el uso de nuestro sitio web y las compras realizadas a través del mismo.</p>
                    <p>1.2. Al realizar un pedido en nuestra tienda online, aceptas que los datos proporcionados sean veraces y completos.</p>
                    <p>1.3. Nos reservamos el derecho de modificar estos términos y condiciones en cualquier momento sin previo aviso. Las modificaciones serán efectivas a partir de su publicación en este sitio web.</p>
                </div>
                <div class="numero2">
                    <p class="borderleft">2. Pedidos</p>
                    <p>2.1. Todos los pedidos están sujetos a la disponibilidad de los productos. Si un artículo no está disponible, te informaremos lo antes posible y te ofreceremos una solución, como el reembolso o la sustitución del producto.</p>
                    <p>2.2. Nos reservamos el derecho de rechazar cualquier pedido si consideramos que no cumple con nuestros requisitos internos de seguridad o autenticidad.</p>
                </div>
                <div class="numero3">
                    <p class="borderleft">3. Precios y Pagos</p>
                    <p>3.1. Todos los precios de los productos se muestran en [Moneda Local] e incluyen los impuestos aplicables.</p>
                    <p>3.2. El pago puede realizarse mediante tarjeta de crédito, débito, o cualquier otro método de pago disponible en nuestra plataforma. Nos reservamos el derecho de cambiar los métodos de pago en cualquier momento.</p>
                    <p>3.3. Los pagos son procesados de forma segura a través de terceros proveedores de servicios de pago. No almacenamos la información de las tarjetas de crédito o débito en nuestros servidores.</p>
                </div>
            </div>
        </div>
    </main>
    
    @include('partials.footer')

</body>

</html>
