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
            ]);

            // Generar un token único
            $token = Str::random(60);

            // Crear el nuevo usuario
            $user = table_email_confirmation::create([
                'token' => $token,
                'email' => $validatedData['email'],
                'name' => $validatedData['name'], // name se convierte en nombre en la base de datos
                'phone' => $validatedData['phone'], // tel se convierte en telefono
                'password' => Hash::make($validatedData['password']), // Encriptar la contraseña
            ]);
            
            Mail::to($user->email)->send(new ConfirmationEmail($token));
            //Mail::to('cesaruiz042804@gmail.com')->send(new ConfirmationEmail($token));

            return redirect()->route('Iniciar-Sesion')->with('message', 'Te hemos enviado un correo para confirmar tu correo.')->with('log', 'success')->with('partialsMessage', 'ok');
        } catch (ValidationException $exception) {
            return redirect()->back()->withErrors($exception->errors())->withInput();
        }
    }

    public function call_confirmEmail($token)
    {

        if (empty($token)) {
            return redirect()->route('Iniciar-Sesion')->with('message', 'El token es inválido o no se proporcionó.')->with('partialsMessage', 'okno');
        }
        
        try {
            // Buscar el token en la base de datos
            $confirmation =  table_email_confirmation::where('token', $token)->first();

            if (!$confirmation) {
                return redirect()->route('Iniciar-Sesion')->with(['message' => 'Token no válido.'])->with('partialsMessage', 'okno');
            }

            // Verificar si el token ha expirado (por ejemplo, 60 minutos)
            $expirationTime = 60; // minutos
            $createdAt = \Carbon\Carbon::parse($confirmation->created_at); // Obtener la fecha de creación
            if ($createdAt->addMinutes($expirationTime)->isPast()) {
                // Si ha pasado el tiempo de expiración
                return  redirect()->route('Iniciar-Sesion')->with(['message' => 'El token ha expirado.'])->with('partialsMessage', 'okno');
            }

            // Crear el usuario definitivo
            table_user::create([
                'email' => $confirmation->email,
                'name' => $confirmation->name,
                'phone' => $confirmation->phone,
                'password' => $confirmation->password, // Aquí ya está encriptada
            ]);

            // Eliminar el token de la base de datos
            table_email_confirmation::where('token', $token)->delete();

            return redirect()->route('index')->with(['message' => 'Cuenta confirmada con éxito.'])->with('partialsMessage', 'ok');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('Iniciar-Sesion')->with(['message' => 'Hubo un problema al procesar la solicitud.'])->with('partialsMessage', 'okno');
        }
    }

    public function call_login_session(Request $request)
    {
        // Validar las credenciales
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ],  [
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
