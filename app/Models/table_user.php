<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table_user extends Model
{

    protected $table = 'table_users';

    protected $fillable = [ // Campos que se pueden asignar masivamente
        'email',
        'name',
        'phone',
        'password',
    ];

    protected $hidden = [
        'email',
        'name',
        'phone',
        'password',
    ];
}

