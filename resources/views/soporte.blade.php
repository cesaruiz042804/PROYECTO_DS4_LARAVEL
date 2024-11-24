<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soporte al cliente</title>
    <link rel="stylesheet" href="{{ asset('assets_css/soporte.css') }}">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
</head>

<body>
    <!-- Aqui falto el otro nav - no la hicieron -->
    @include('partials.navbar')

    <main>
        <div class="soporte-cliente">
            <div class="preguntas-respuestas">
                <div class ="numero1-">

                    <h1>Preguntas y respuestas</h1>
                    <p>
                        1. ¿Cuáles son los métodos de pago aceptados?<br><br>
                        Aceptamos pagos con tarjetas de crédito y débito (Visa, MasterCard, American Express) y otros
                        métodos de pago disponibles en nuestra plataforma. Todos los pagos son procesados de forma
                        segura.<br><br>
                        2. ¿Cómo puedo hacer un pedido?<br><br>
                        Para hacer un pedido, simplemente navega por nuestro catálogo de productos, añade tus artículos
                        al carrito y sigue los pasos de pago. Una vez completada la compra, recibirás una confirmación
                        por correo electrónico.<br><br>
                        3. ¿Cuánto tarda en llegar mi pedido?<br><br>
                        El tiempo de entrega varía según la ubicación. Los envíos locales suelen tardar entre 2 y 4
                        horas. Para zonas más alejadas, el tiempo puede extenderse a 1-3 días hábiles. Te notificaremos
                        una vez que tu pedido esté en camino.<br><br>
                        4. ¿Ofrecen envíos a domicilio?<br><br>
                        Sí, realizamos envíos a domicilio dentro de [área/localidad]. Las tarifas de envío se calculan
                        en función de la ubicación de entrega y se mostrarán antes de completar el pedido.
                    </p>

                </div>

                <div class ="numero2-">
                    <p>
                        5. ¿Puedo cambiar o cancelar mi pedido después de haberlo hecho?<br><br>
                        Dado que nuestros productos son frescos y hechos a pedido, no podemos aceptar cancelaciones o
                        cambios una vez que el pedido ha sido confirmado. Sin embargo, si tienes un problema con tu
                        pedido, contáctanos lo antes posible y haremos nuestro mejor esfuerzo por ayudarte.<br><br>
                        6. ¿Qué hago si mi pedido llega incorrecto o dañado?<br><br>
                        Si recibes un producto incorrecto o dañado, por favor, contáctanos dentro de las 24 horas
                        siguientes a la recepción del pedido. Envíanos fotos del producto junto con tu número de pedido,
                        y evaluaremos el caso para ofrecerte una solución. <br><br>
                        7. ¿Tienen productos aptos para personas con alergias alimentarias?<br><br>
                        Sí, contamos con productos libres de gluten, lactosa y otros alérgenos comunes. Sin embargo, te
                        recomendamos que consultes las descripciones de los productos o nos contactes directamente para
                        más información sobre alérgenos específicos.<br><br>
                        8. ¿Ofrecen opciones personalizadas o pedidos especiales? <br><br> Sí, podemos hacer helados y
                        postres personalizados para eventos especiales. Contáctanos con antelación para discutir tus
                        necesidades y diseñar el producto perfecto para ti.
                </div>

            </div>
            <div class="terminos-condiciones">
                <div class = "numero1">
                    <h1>Términos y condiciones</h1>
                    <p>
                        1. General<br>
                        <br>1.1. Estos términos y condiciones regulan el uso de nuestro sitio web y las compras
                        realizadas a través del mismo.<br>
                        <br>1.2. Al realizar un pedido en nuestra tienda online, aceptas que los datos proporcionados
                        sean veraces y completos.<br>
                        <br>1.3. Nos reservamos el derecho de modificar estos términos y condiciones en cualquier
                        momento sin previo aviso. Las modificaciones serán efectivas a partir de su publicación en este
                        sitio web.
                    </p>
                </div>

                <div class = "numero2">
                    <p>
                        2. Pedidos<br><br>
                        2.1. Todos los pedidos están sujetos a la disponibilidad de los productos. Si un artículo no
                        está disponible, te informaremos lo antes posible y te ofreceremos una solución, como el
                        reembolso o la sustitución del producto.
                        <br><br>2.2. Nos reservamos el derecho de rechazar cualquier pedido si consideramos que no
                        cumple con nuestros requisitos internos de seguridad o autenticidad.
                    </p>
                </div>

                <div class = "numero3">
                    <p>
                        3. Precios y Pagos <br><br>
                        3.1. Todos los precios de los productos se muestran en [Moneda Local] e incluyen los impuestos
                        aplicables.
                        <br><br>3.2. El pago puede realizarse mediante tarjeta de crédito, débito, o cualquier otro
                        método de pago disponible en nuestra plataforma. Nos reservamos el derecho de cambiar los
                        métodos de pago en cualquier momento.
                        <br><br>3.3. Los pagos son procesados de forma segura a través de terceros proveedores de
                        servicios de pago. No almacenamos la información de las tarjetas de crédito o débito en nuestros
                        servidores.
                    </p>
                </div>
            </div>
        </div>
    </main>
    
    @include('partials.footer')

</body>

</html>
