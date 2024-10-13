<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentMethod;
use Stripe\Exception\ApiErrorException;
use Stripe\Charge;
use Stripe\Card;
use App\Jobs\ProcessPayment;
use Predis\Client;
use Illuminate\Support\Facades\Log;


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

        try {
            $charge = Charge::create([
                'amount' => 1000, // ccentas
                'currency' => 'usd',
                'source' => $token,
                'description' => 'Test Payment',
            ]);

            $cardType = $charge->payment_method_details->card->brand; // Obtener el tipo de tarjeta

            // Mapeo de iconos
            $cardIcons = [
                'visa' => 'recursos_iconos/visa.png',
                'mastercard' => 'recursos_iconos/mastercard.png',
                'amex' => 'recursos_iconos/amex.png',
                'discover' => 'recursos_iconos/discover.png',
                'diners' => 'recursos_iconos/diners.png',
                'default' => 'recursos_iconos/default.png',
            ];
            
            session()->forget(['iconPath', 'cardType']); // Limpia también en caso de error
            $iconPath = $cardIcons[$cardType] ?? $cardIcons['default'];

            //dd(compact('iconPath', 'cardType')); // Verifica los datos antes de redirigir
            Log::debug($iconPath);
            Log::debug($cardType);

            session(['iconPath' => $iconPath, 'cardType' => $cardType]);

            //return redirect()->route('payment.success')->with('success', 'Payment successful!')->with('iconPath')->with('cardType');
            return redirect()->route('payment.success')->with('success', 'Payment successful!');
        } catch (\Exception $e) { // En el caso que se haga bien la compra te redirecciona a otra pagina
            session(['iconPath' => 'recursos_iconos/default.png', 'cardType' => 'Genérica', 'typeError' => $e->getMessage()]);
            return redirect()->route('payment.failure')->with('error', $e->getMessage());
            // Si da fallos, redireccion a otra pagina
        }
    }
}
