<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shirini-E</title>
</head>

<body style="font-family: 'Arial', sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; color: #4b4b4e;">
    <div style="background-color: #ffffff; max-width: 600px; margin: 20px auto; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); overflow: hidden;">
        <div style="background-color: #75aafa; padding: 20px; color: white; text-align: center;">
            <h2 style="margin: 0;">¡Tu compra en Shirini-e ha sido exitosa! 🎉</h2>
        </div>
        <div style="padding: 20px;">
            <h1 style="font-size: 24px; color: #D6E9FF; margin: 0 0 10px;">¡Hola, {{ $name }}!</h1>
            <p style="font-size: 16px; line-height: 1.5; margin: 10px 0;">Información sobre la compra:</p>
            <p style="font-size: 16px; line-height: 1.5; margin: 10px 0;">Número de pedido: 1</p>
            <p style="font-size: 16px; line-height: 1.5; margin: 10px 0;">Método de pago: card {{ $cardType }}</p>
            <p style="font-size: 16px; line-height: 1.5; margin: 10px 0;">Fecha de compra: {{ $date_actually }}</p>
            <p style="font-size: 16px; line-height: 1.5; margin: 10px 0;">Total pagado: {{ $amount }}$</p>

            <a href="{{ route('index') }}" style="display: inline-block; background-color: #4d94ff; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; font-size: 16px;">Visitar nuestro sitio</a>
        </div>
        <div style="background-color: #75aafa; padding: 15px; text-align: center; color: #ffffff; font-size: 14px;">
            <p style="margin: 0;">¡Gracias por confiar en nosotros! Esperamos que disfrutes de nuestros helados tanto como disfrutamos prepararlos para ti. Si tienes alguna duda o pregunta sobre tu pedido, no dudes en responder este correo o llamarnos al xxxx-xxxx.</p>
            <p style="margin: 10px 0 0;">¡Nos vemos pronto y que disfrutes tu helado! 🍦😊</p>
        </div>
    </div>
</body>

</html>
