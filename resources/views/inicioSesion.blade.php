<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Tienda online de helados.">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
    <link rel="stylesheet" href="{{ asset('assets_css/inicioSesion.css') }}">
    <title>Iniciar Sesión</title>
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
            <form class="ContenedorTarjeta-InfoTarjetas" id="ContenedorTarjeta-InfoTarjetas" action="{{ route('login.session') }}" method="POST">
                @csrf
                <h3>Inicio de Sesión</h3>
                <label for="NombreUsuario">
                    Correo electrónico
                    <input type="text" placeholder="usuario@domain.com" id="NombreUsuario" name="email" value="{{ old('email') }}">
                </label>
                <label for="contraseña">
                    Contraseña
                    <input type="password" placeholder="Contraseña" id="contraseña" name="password">
                </label>
                <p>¿No tienes cuenta? Crear una cuenta</p>
                <div class="ContenedroTarjeta-BotonesDePagar">
                    <a class="InfoTarjeta-Cambiar" href="{{ route('/Inicio-Sesion/Registro') }}">Crear Cuenta</a>
                    <button class="InfoTarjeta-Pagar" id="btnContinue" type="submit">Continuar</button>
                </div>
            </form>
        </div>
    </main>

    @include('partials.footer')
    
    <script src="{{ asset('assets_js/inicioSesion.js') }}"></script>

</body>

</html>
