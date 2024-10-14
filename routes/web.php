<?php

use App\Http\Controllers\PaginacionController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSender;


use App\Models\Order;
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
    return view('index');
})->name('Shirini-e/index.php'); // Archivo index (página principal)

Route::get('/Productos/sabores.php', [PaginacionController::class, 'call_sabores'])->name('Productos/sabores.php'); // Archivo sabores

Route::get('/Productos/micarrito.php', [PaginacionController::class, 'call_micarrito'])->name('Productos/micarrito.php'); // Archivo micarrito

Route::get('/Iniciar-Sesion.php', [PaginacionController::class, 'call_iniciar_sesion'])->name('Iniciar-Sesion.php'); // Archivo micarrito

Route::get('/Soporte.php', [PaginacionController::class, 'call_soporte'])->name('Soporte.php');

// Ruta para crear cuenta de registro

Route::get('/Inicio-Sesion/Registro.php', [PaginacionController::class, 'call_crear_cuenta'])->name('/Inicio-Sesion/Registro');

// Rutas para cuando se de click en "pagar ahora", este envie el valor a metodo post, y luego llamar la vista con elo metodo get usando session
// Se usa ajax para pasar el dato al controlador, luego se envía un json para confirmar que se hizo
Route::get('/Productos/micarrito/metodoDePago.php', [PaymentController::class, 'call_metodoDePago'])->name('Productos.micarrito.metodoDePago'); // Esta ruta está dentro de micarrito
Route::post('/Productos/micarrito/valor.php', [PaymentController::class, 'call_valor'])->name('Productos.micarrito.valor'); // Esta ruta está dentro de micarrito

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

Route::get('/Helados/Vainilla.php', [PaginacionController::class, 'call_vainilla'])->name('Helados/Vainilla'); 
Route::get('/Helados/Cereza.php', [PaginacionController::class, 'call_cereza'])->name('Helados/Cereza'); 
Route::get('/Helados/ChocoMint.php', [PaginacionController::class, 'call_chocoMint'])->name('Helados/ChocoMint'); 
Route::get('/Helados/ChocoWest.php', [PaginacionController::class, 'call_chocoWest'])->name('Helados/ChocoWest'); 
Route::get('/Helados/Cookie', [PaginacionController::class, 'call_cookie'])->name('Helados/Cookie'); 
Route::get('/Helados/Mani.php', [PaginacionController::class, 'call_mani'])->name('Helados/Mani'); 

// Ruta para confirmar los correos electrónicos
Route::post('/verify-email-domain', [PaymentController::class, 'verifyEmailDomain'])->name('verify-email-domain'); 

// Ruta para enviar los mail
