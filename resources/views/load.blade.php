<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/spin.js/2.3.2/spin.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets_css/load.css') }}">
</head>

<body>
    @if ($errors->has('error'))
        <div class="alert alert-danger">
            <strong>Error al procesar el pago.</strong><br>
            {{ $errors->first('error') }}
        </div>
    @endif

    <div class="container">
        <div class="cubo">
            <label>Shirini-e</label>
        </div>
        <div class="loading">
            <div>
                <h2>El pago se está realizando.</h2>
                <h2>Cargando</h2>
                <p>...</p>
                <input type="hidden" name='jobId' id='jobId'>
                <br>
                <br>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
      
    </script>

    <!--
    <div id="loading"></div>
    <script>
        // Opciones de personalización (opcional)
        var opts = {
            lines: 13, // El número de líneas en el spinner
            length: 20, // El largo de cada línea
            width: 10, // El ancho de cada línea
            radius: 30, // El radio del spinner
            color: '#000', // El color del spinner
            speed: 1, // La velocidad de rotación
            trail: 60, // La opacidad del rastro
            className: 'spinner' // La clase CSS para personalizar el spinner
        };

        // Inicializa el spinner en el elemento con id "loading"
        var target = document.getElementById('loading');
        var spinner = new Spinner(opts).spin(target);

        // Función para mostrar el spinner
        function showSpinner() {
            spinner.spin(target);
        }

        // Función para ocultar el spinner
        function hideSpinner() {
            spinner.stop();
        }

        window.onload = function() {
            showSpinner();

            // Ocultar el spinner después de 2 segundos (ajusta el tiempo según tus necesidades)
            setTimeout(() => {
                hideSpinner();
            }, 2000);
        };
    </script>
-->
</body>

</html>
