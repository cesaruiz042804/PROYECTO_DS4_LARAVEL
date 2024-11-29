<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta name="description" content="Tienda online de helados.">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
    <link rel="stylesheet" href="{{ asset('assets_css/crearCuenta.css') }}">
    <title>Registro</title>
</head>

<body>

    @if (session()->has('partialsMessage') && session('partialsMessage') == 'ok')
        @include('partials.messageGood')
    @else
        @include('partials.messageErrors')
    @endif

    @php
        session()->forget('partialsMessage'); // Elimina la variable 'partialMessage' de la sesión
    @endphp

    @include('partials.navbar')

    <main>
        <div class="Main__ContenedorTarjeta">
            <form class="ContenedorTarjeta-InfoTarjetas" id="ContenedorTarjeta-InfoTarjetas" action="{{ route('register') }}" method="POST">
                @csrf
                <h3>Registro</h3>
                <label for="correo">
                    Correo electrónico
                    <input type="text" placeholder="usuario@domain.com" id="correo" name="email"
                        value="{{ old('email') }}">
                </label>
                <label for="contraseña">
                    Contraseña
                    <input type="password" placeholder="Contraseña" id="contraseña" name="password">
                </label>
                <label for="confirm_password">
                    Confirmar contraseña
                    <input type="password" placeholder="Confirmar contraseña" id="confirm_password" name="confirm_password">
                </label>
                <label for="nombreusuario">
                    Nombre completo
                    <input type="text" placeholder="Nombre Usuario" id="nombreusuario" name="name"
                        value="{{ old('name') }}">
                </label>
                <label for="numerotelefono">
                    Número de teléfono
                    <input type="number" placeholder="####-####" id="numerotelefono" name="phone"
                        value="{{ old('phone') }}">
                </label>
                <div class="ContenedroTarjeta-BotonesDePagar">
                    <button class="btn-register" id="btnRegister" type="submit">Registrarse</button>
                </div>
            </form>

        </div>
    </main>

    @include('partials.footer')

    <script src="{{ asset('assets_js/crearCuenta.js') }}"></script>

</body>

</html>
