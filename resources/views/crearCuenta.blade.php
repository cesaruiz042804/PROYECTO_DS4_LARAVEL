<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('assets_css/crearCuenta.css') }}">
    <link rel="shortcut icon" href="{{ asset('recursos_index/Logo Shirine.png') }}">
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
                    <input type="password" placeholder="Contraseña" id="contraseña" name="password"
                        value="{{ old('password') }}">
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
