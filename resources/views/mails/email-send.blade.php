<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shirini-E</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #4b4b4e;
        }

        :root {
            --brown_: #671F1F;
            --pink_: #EF83D180;
            --celeste_: #D6E9FF;
            --menta_: #608F80;
            --chocolate_: #8F620A;
            --cereza_: #A01927;
            --Amarillo_: #CAC326;
        }

        .email-container {
            background-color: #ffffff;
            max-width: 600px;
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .email-header {
            background-color: #D6E9FF;
            padding: 20px;
            color: white;
            text-align: center;
        }

        .email-body {
            padding: 20px;
        }

        .email-body h1 {
            font-size: 24px;
            color: #D6E9FF;
        }

        .email-body p {
            font-size: 16px;
            line-height: 1.5;
            margin: 10px 0;
        }

        .email-footer {
            background-color: #f4f4f4;
            padding: 15px;
            text-align: center;
            color: #777;
            font-size: 14px;
        }

        .btn {
            display: inline-block;
            background-color: #D6E9FF;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0f110f;
        }

        .email-footer a {
            color: #4c9baf;
            text-decoration: none;
        }

        .email-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="email-header">
            <h2>¡Tu compra en Shirini-e ha sido exitosa! 🎉.</h2>
        </div>
        <div class="email-body">
            <h1>¡Hola, {{ $name }}!</h1>
            <p>Información sobre la compra:</p>
            <p>Número de pedido: 1 </p>
            <p>Método de pago: card {{ $cardType }}</p>
            <p>Fecha de compra: {{ $date_actually }}</p>
            <p>Total pagado: {{ $amount }}$</p>

            <a href="#" class="btn">Visitar nuestro sitio</a>
        </div>
        <div class="email-footer">
            <p>¡Gracias por confiar en nosotros!
                Esperamos que disfrutes de nuestros helados tanto como disfrutamos prepararlos para ti. Si tienes alguna
                duda o pregunta sobre tu pedido, no dudes en responder este correo o llamarnos al xxxx-xxxx.</p>
            <p>¡Nos vemos pronto y que disfrutes tu helado! 🍦😊</p>
        </div>
    </div>
</body>

</html>
