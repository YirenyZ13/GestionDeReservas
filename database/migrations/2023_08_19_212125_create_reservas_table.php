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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();           
            $table->dateTime('fecha_entrada');
            $table->dateTime('fecha_salida');
            $table->unsignedBigInteger('habitacion_id');
            $table->unsignedBigInteger('huesped_id');
            $table->integer('numero_de_huespedes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
