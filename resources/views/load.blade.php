<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/spin.js/2.3.2/spin.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets_css/load.css') }}">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
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

</body>

</html>
