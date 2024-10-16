<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
//use Stripe\PaymentMethod;
//use Stripe\Exception\ApiErrorException;
use Stripe\Charge;
//use Stripe\Card;
//use App\Jobs\ProcessPayment;
//use Predis\Client;
use Illuminate\Support\Facades\Log;
//use Termwind\Components\Raw;

use Illuminate\Support\Facades\Mail;
use App\Jobs\jobEmailPayment; 


class PaymentController extends Controller
{

    public function call_valor(Request $request)
    {
        $myData = $request->valor; // Accede al valor enviado en la estructura ajax
        session(['myData' => $myData]); // Luego se guarda ese dato en la session con un nombre
        return response()->json(['success' => 'Dato recibido exitosamente'], 200); // Retorna una respuesta
    }

    public function call_metodoDePago()
    {
        $myData = session('myData'); // Recuperar el dato guardado en la sesión
        return view('metodoDePago', ['valor' => $myData]); // Mostrar la vista metodoDePago y pasar el dato
    }

    public function stripePost(Request $request)
    {

        Stripe::setApiKey(env('STRIPE_SECRET'));
        
        $token = $request->input('stripeToken'); // Se obtiene el token del input que guarda el token de stripe
        
        Log::debug($token);
        // Es necesario que los input en html tengan el atributo name para poder identificarlos en el controlador
        $name = $request->input('NombreTarjeta');
        $amount = $request->input('amount');
        $email = $request->input('Correo'); 

        try {
            $charge = Charge::create([
                'amount' => intval($amount * 100), // Se multiplica por 100 porque amount solo recibe valores en centavos, y hacer esto sería como una conversión de dólares a centavos
                'currency' => 'usd',
                'source' => $token,
                'description' => 'Test Payment',
            ]);
            
            $cardType = $charge->payment_method_details->card->brand; // Obtener el tipo de tarjeta
            
            $cardIcons = [ // Mapeo de iconos
                'visa' => 'recursos_iconos/visa.png',
                'mastercard' => 'recursos_iconos/mastercard.png',
                'amex' => 'recursos_iconos/amex.png',
                'discover' => 'recursos_iconos/discover.png',
                'diners' => 'recursos_iconos/diners.png',
                'default' => 'recursos_iconos/default.png',
            ];
            
            jobEmailPayment::dispatch($email, $name, $amount, $cardType); // Esto es para hacer el proceso de enviar correo en segundo plano

            session()->forget(['iconPath', 'cardType']); // Limpia también en caso de error
            $iconPath = $cardIcons[$cardType] ?? $cardIcons['default'];

            session(['iconPath' => $iconPath, 'cardType' => $cardType]);

            //Mail::to($email)->send(new EmailSender($name, $amountDecimal, $cardType));

            return redirect()->route('payment.success')->with('success', 'Payment successful!');
        } catch (\Exception $e) { // En el caso que se haga bien la compra te redirecciona a otra pagina
            session(['iconPath' => 'recursos_iconos/default.png', 'cardType' => 'Genérica', 'typeError' => $e->getMessage()]);
            return redirect()->route('payment.failure')->with('error', $e->getMessage()); // Si da fallos, redireccion a otra pagina
        }
    }
    
    public function verifyEmailDomain(Request $request) // Función para verificar el email
    {
        try{
            $request->validate([
                'Correo' => 'required|email'
            ]);

        }catch(\Exception $e){
            Log::debug($e->getMessage());
            return response()->json(['valid' => false, 'message' => 'Por favor, ingresa un correo electrónico válido.']);
        }
        
        $email = $request->input('Correo'); // Recibe el correo

        $allowedDomains = [ // Lista de dominios permitidos
            'gmail.com',
            'yahoo.com',
            'hotmail.com',
            'outlook.com',
            'icloud.com',
            'live.com',
            'aol.com',
            'zoho.com',
            'protonmail.com',
            'mail.com',
            'utp.ac.pa'
        ];
        
        $domain = substr(strrchr($email, "@"), 1); // Extrae el dominio

        if (in_array($domain, $allowedDomains)) {
            return response()->json(['valid' => true]);
        } else {
            return response()->json(['valid' => false, 'message' => 'Dominio no permitido.']);
        }
    }
}

/*

php artisan optimize:clear
php artisan view:clear
php artisan config:clear
php artisan route:clear
php artisan cache:clear

Si hace una limpieza de cache o se optimiza, se tiene que hacer todos los comandos ya que no dejará usar la API de stripe
Es obligatorio

*/
