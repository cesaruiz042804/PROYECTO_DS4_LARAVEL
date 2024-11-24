<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('table_users', function (Blueprint $table) {
            $table->id(); // Crea una columna de tipo entero autoincremental como clave primaria.
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('phone');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('table_users');
    }
};

