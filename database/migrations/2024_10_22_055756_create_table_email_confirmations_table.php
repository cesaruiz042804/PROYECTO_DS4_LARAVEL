<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_email_confirmations', function (Blueprint $table) {
            $table->string('token'); // Crea una columna de tipo entero autoincremental como clave primaria.
            $table->id(); // Crea una columna de tipo entero autoincremental como clave primaria.
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_email_confirmations');
    }
};
