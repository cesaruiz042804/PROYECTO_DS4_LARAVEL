<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table_email_confirmation extends Model
{
    protected $table = 'table_email_confirmations';

    protected $fillable = [ // Campos que se pueden asignar masivamente
        'email',
        'name',
        'phone',
        'password',
        'token',
    ];

    protected $hidden = [
        'email',
        'phone',
        'password', // Oculta la contraseña cuando el modelo es transformado a JSON
        'token', // Oculta la contraseña cuando el modelo es transformado a JSON
    ];
}
