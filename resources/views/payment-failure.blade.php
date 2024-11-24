<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">

</head>

<body>
    <style>
        body {
            background-image: linear-gradient(to left, #c49e9e, var(--celeste_));
        }

        :root {
            --brown_: #671F1F;
            --pink_: #EF83D180;
            --celeste_: #D6E9FF;
            --menta_: #608F80;
            --chocolate_: #8F620A;
            --cereza_: #A01927;
        }
    </style>

    <script>
        function notification() {
            Swal.fire({
                icon: 'error',
                title: '¡Error!',
                html: `
                    <label> {{ session('typeError') }}. </label>
                    <br>
                    <label> Tipo de tarjeta: <strong>"{{ session('cardType') }}"</strong> </label>`,
                imageUrl: "{{ asset(session('iconPath')) }}", // URL de la imagen que deseas mostrar
                imageWidth: 200, // Ajusta el ancho de la imagen
                imageHeight: 200, // Ajusta la altura de la imagen
                imageAlt: 'Descripción de la imagen', // Texto alternativo para la imagen
                showConfirmButton: true,
                timer: 6000
            }).then(() => {
                window.location.href = "{{ url()->previous() }}";
            });
            window.history.pushState(null, null, window.location.href);
            window.onpopstate = function() {
                window.history.pushState(null, null, window.location.href);
            };
        }

        setTimeout(function() {
            notification(); // Call your notification function after 100ms
        }, 100);
    </script>
</body>

</html>
