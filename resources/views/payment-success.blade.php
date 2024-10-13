<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Successful</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <!--
    @if (session('success'))
<div class="alert alert-success">
            {{ session('success') }}
        </div>
@endif

    @if (session('iconPath'))
<img src="{{ asset(session('iconPath')) }}" alt="Card Icon">
        <p id="imageCard"></p>
@endif

    @if (session('cardType'))
<p>Card Type: {{ session('cardType') }}</p>
@endif
    -->

    <style>
        body {
            background-image: linear-gradient(to left, #857df3, var(--celeste_));
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
                icon: 'success',
                title: '¡Success!',
                text: 'Tu compra ha sido completada exitosamente.',
                html: `
                    <label> Tu compra ha sido completada exitosamente. </label>
                    <br>
                    <label> Tipo de tarjeta: "{{ session('cardType') }}" </label>`,
                imageUrl: "{{ asset(session('iconPath')) }}", // URL de la imagen que deseas mostrar
                imageWidth: 200, // Ajusta el ancho de la imagen
                imageHeight: 200, // Ajusta la altura de la imagen
                imageAlt: 'Descripción de la imagen', // Texto alternativo para la imagen
                showConfirmButton: true,
                timer: 6000
            }).then(() => {
                //window.location.href = "{{ route('Shirini-e/index.php') }}";
                window.location.replace("{{ route('Shirini-e/index.php') }}");
            });
        }

        setTimeout(function() {
            notification(); // Call your notification function after 100ms
        }, 100);
    </script>
</body>

</html>
