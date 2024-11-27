<?php

use App\Http\Controllers\PaginacionController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SessionMiddleware;

/* 
Sintaxis para hacer las rutas: 
- Nombre de la ruta o url que se va a poner en el buscador (El nombre que le quieras dar, y el mismo saldra arriba en el buscador)
- Controlador (donde están los métodos para retornar la vista)
- Luego viene un arroba
- Nombre del método
- Definición de la ruta

- Puedes escribir la ruta de esta manera
- Route::get('url', [nombre_de_controlador::class], 'metodo')->name('puedes ponerle cualquier nombre y usarlo para hacer llamada a la ruta');
- Se pueden escribir tambien las rutas asi
- Route::get('url', 'nombre_de_controlador@metodo')->name('puedes ponerle cualquier nombre y usarlo para hacer llamada a la ruta');
*/

// Esta parte es para los link del header (Se encuentran todas las páginas)

Route::get('/', function () {
    return redirect()->route('index');
})->name('index'); // Archivo index (página principal)

Route::get('/index', function () {
    return view('index');
})->name('index'); // Archivo index (página principal)

Route::get('/productos/sabores', [PaginacionController::class, 'call_sabores'])->name('Productos.sabores'); // Archivo sabores

Route::get('/productos/micarrito', [PaginacionController::class, 'call_micarrito'])->name('Productos.micarrito'); // Archivo micarrito

Route::get('/iniciar-sesion', [PaginacionController::class, 'call_iniciar_sesion'])->name('Iniciar-Sesion'); // Archivo micarrito

Route::get('/soporte', [PaginacionController::class, 'call_soporte'])->name('Soporte');


// Rutas para cuando se de click en "pagar ahora", este envie el valor a metodo post, y luego llamar la vista con elo metodo get usando session
// Se usa ajax para pasar el dato al controlador, luego se envía un json para confirmar que se hizo
Route::get('/productos/micarrito/metododepago', [PaymentController::class, 'call_metodoDePago'])->name('Productos.micarrito.metodoDePago')->middleware(SessionMiddleware::class); // Esta ruta está dentro de micarrito
Route::post('/productos/micarrito/valor', [PaymentController::class, 'call_valor'])->name('Productos.micarrito.valor'); // Esta ruta está dentro de micarrito

// Rutas para metodo de pago (tarjeta)

Route::get('/payment', [PaymentController::class, 'call_payment']);
Route::post('/stripePayment', [PaymentController::class, 'stripePost'])->name('stripe.Payment'); // Recibe los datos del cliente

Route::get('/payment/success', function () {
    return view('payment-success'); // Página para retorno de pago realizado correctamente 
})->name('payment.success');

Route::get('/payment/failure', function () {
    return view('payment-failure'); // Página para retorno de pago con fallo 
})->name('payment.failure');

// Rutas para las vistas de los helados

Route::get('/helados/vainilla', [PaginacionController::class, 'call_vainilla'])->name('Helados.Vainilla'); 
Route::get('/helados/cereza', [PaginacionController::class, 'call_cereza'])->name('Helados.Cereza'); 
Route::get('/helados/chocoMint', [PaginacionController::class, 'call_chocoMint'])->name('Helados.ChocoMint'); 
Route::get('/helados/chocoWest', [PaginacionController::class, 'call_chocoWest'])->name('Helados.ChocoWest'); 
Route::get('/helados/cookie', [PaginacionController::class, 'call_cookie'])->name('Helados.Cookie'); 
Route::get('/helados/mani', [PaginacionController::class, 'call_mani'])->name('Helados.Mani'); 

// Ruta para confirmar los correos electrónicos
Route::post('/verify-email-domain', [PaymentController::class, 'verifyEmailDomain'])->name('verify-email-domain'); 

// Ruta para crear cuenta de registro

Route::get('/inicio-sesion/registro', [PaginacionController::class, 'call_crear_cuenta'])->name('/Inicio-Sesion/Registro');

// Rutas para el sistema de logueo
Route::post('/login-session', [LoginController::class, 'call_login_session'])->name('login.session');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::get('confirm-email/{token}', [LoginController::class, 'call_confirmEmail'])->name('confirm.email');
Route::get('/logout', [LoginController::class, 'call_logout'])->name('logout');
Route::post('/logout-session', [LoginController::class, 'call_logout_session'])->name('logout.session');

// ./vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php

// git add .
// git commit -m "Descripción de los cambios realizados"
// git push origin master     o main
