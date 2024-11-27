<?php

namespace App\Http\Controllers;

use App\Models\datos_users;
use App\Models\table_email_confirmation;
use App\Models\table_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use \App\Mail\ConfirmationEmail;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use Exception;

class LoginController extends Controller
{
    public function register(Request $request)
    {

        try {

            $validatedData = $request->validate([ // Verifica si están llenas las casillas (son reglas que se ponen a las peticiones desde laravel)
                'email' => 'required|email|unique:table_users,email', // En unique, se pone el nombre de la tabla y el nombre de la columna donde se busca si existe el dato
                'name' => 'required|string|max:255',
                'phone' => 'required|string',
                'password' => [
                    'required',
                    'string',
                    'min:8',
                    'regex:/[A-Z]/', // Al menos una letra mayúscula
                    'regex:/[a-z]/', // Al menos una letra minúscula
                    'regex:/[0-9]/', // Al menos un número
                    'regex:/[\W_]/', // Al menos un carácter especial
                ],
                'confirm_password' => 'required|same:password',  // La regla 'same' compara con el campo 'email'
            ],  [
                'email.required' => 'El campo de correo electrónico es obligatorio.',
                'email.email' => 'El formato del correo electrónico es inválido.',
                'email.unique' => 'Este correo electrónico ya está en uso.',
                'name.required' => 'El campo nombre completo es obligatorio.',
                'phone.required' => 'El campo teléfono es obligatorio.',
                'password.required' => 'El campo contraseña es obligatorio.',
                'password.min' => 'La contraseña debe tener al menos 8 caracteres.',
                'password.required' => 'La contraseña es obligatoria.',
                'password.regex' => 'La contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.',
                'confirm_confirm_passwordemail.required' => 'El campo para confirmar la contraseña es obligatorio.',
                'confirm_password.same' => 'Los campos de contraseña deben coincidir.',
            ]);

            $user = table_email_confirmation::where('email', $request->email)->first();

            if ($user) { // Esto me sirve para saber si el correo se ha intentado registrar de nuevo
                return redirect()->back()->with('message', 'Este correo ya está registrado. Por favor, revisa tu bandeja de entrada (y la carpeta de spam) para confirmar tu cuenta.')->with('log', 'success')->with('partialsMessage', 'ok');
            }


            $token = Str::random(60); // Generar un token único

            // Crear el nuevo usuario
            $user = table_email_confirmation::create([
                'token' => $token,
                'email' => $validatedData['email'],
                'name' => $validatedData['name'], // name se convierte en nombre en la base de datos
                'phone' => $validatedData['phone'], // tel se convierte en telefono
                'password' => Hash::make($validatedData['password']), // Encriptar la contraseña
            ]);

            try {
                Mail::to($user->email)->send(new ConfirmationEmail($token));
            } catch (Exception $e) {

                Log::error('Error al enviar el correo: ' . $e->getMessage()); // Puedes registrar el error o intentar reintentar
                return redirect()->back()->with('message', 'Error al intentar enviar el correo')->with('partialsMessage', 'okno');
            }

            return redirect()->route('Iniciar-Sesion')->with('message', 'Te hemos enviado un correo para confirmar tu correo (si el correo no le llega de inmediato, puede tardar entre una hora para su llegada).')->with('log', 'success')->with('partialsMessage', 'ok');
        } catch (ValidationException $exception) {
            return redirect()->back()->withErrors($exception->errors())->withInput()->with('message', 'No hemos podido enviar el correo porque el correo puede ser inexistente')->with('log', 'success')->with('partialsMessage', 'okno');
        }
    }

    public function call_confirmEmail($token)
    {
        if (empty($token)) {
            return redirect()->route('Iniciar-Sesion')->with('message', 'El token es inválido o no se proporcionó.')->with('partialsMessage', 'okno');
        }

        try {
            // Buscar el token en la base de datos
            $confirmation = table_email_confirmation::where('token', $token)->first();

            if (!$confirmation) {
                return redirect()->route('Iniciar-Sesion')->with(['message' => 'Token no válido.'])->with('partialsMessage', 'okno');
            }

            // Verificar si el token ha expirado (por ejemplo, 120 minutos)
            $expirationTime = 120; // minutos
            $createdAt = \Carbon\Carbon::parse($confirmation->created_at); // Obtener la fecha de creación
            $expiration = $createdAt->addMinutes($expirationTime); // Sumar el tiempo de expiración

            // Si la fecha actual es posterior a la fecha de expiración, significa que el token ha expirado
            if (\Carbon\Carbon::now()->isAfter($expiration)) {
                // El token ha expirado, generar uno nuevo
                $newToken = Str::random(60); // Generar un nuevo token

                // Actualizar el token y la fecha de creación para que sea nuevo
                $confirmation->update([
                    'token' => $newToken,
                    'created_at' => \Carbon\Carbon::now(), // Actualizamos la fecha de creación para que la expiración sea relativa a ahora
                ]);

                // Enviar el nuevo token por correo electrónico
                Mail::to($confirmation->email)->send(new ConfirmationEmail($newToken));

                return redirect()->route('Iniciar-Sesion')->with(['message' => 'El token ha expirado. Hemos enviado un nuevo correo de verificación. Revisa tu bandeja de entrada (y tu spam).'])->with('partialsMessage', 'ok');
            }

            // Si el token no ha expirado, procedemos a crear el usuario definitivo
            table_user::create([
                'email' => $confirmation->email,
                'name' => $confirmation->name,
                'phone' => $confirmation->phone,
                'password' => $confirmation->password, // Aquí ya está encriptada
            ]);

            // Eliminar el token de la base de datos después de la confirmación
            table_email_confirmation::where('token', $token)->delete();

            return redirect()->route('index')->with(['message' => 'Cuenta confirmada con éxito.'])->with('partialsMessage', 'ok');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('Iniciar-Sesion')->with(['message' => 'Hubo un problema al procesar la solicitud.'])->with('partialsMessage', 'okno');
        }
    }

    public function call_login_session(Request $request)
    {
        // Validar las credenciales
        $request->validate([ // reglas de validación para los campos
            'email' => 'required|email',
            'password' => 'required|string',
        ],  [ // mensajes de error para cada una de las reglas puestas anteriormente
            'email.required' => 'El campo de correo electrónico es obligatorio.',
            'password.required' => 'El campo de contraseña es obligatorio.',
        ]);

        // Buscar el usuario por correo electrónico
        $user = table_user::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Credenciales correctas: Almacena el ID del usuario en la sesión
            session(['user' => $user->id]);
            Log::debug(session('user'));
            $intendedUrl = session('intended_url', route('index')); // Cambia 'default.route' por la ruta que deseas por defecto
            session()->flash('partialsMessage', 'ok');
            session()->flash('message', 'Has iniciado sesión correctamente.');
            session()->forget('intended_url'); // Eliminar la URL de la sesión
            return redirect($intendedUrl);
        } else {
            // Credenciales incorrectas
            return back()->withErrors(['email2' => 'Las credenciales son incorrectas o no se encuentra registrado.']);
        }
    }

    public function call_logout_session()
    {
        //Log::debug(session('user'));
        session()->forget('user'); // Eliminar el ID del usuario de la sesión
        return redirect()->route('index'); // Redirigir a la página de inicio de sesión
    }

    public function call_logout()
    {
        return view('logout');
    }
}
