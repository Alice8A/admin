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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('categoria');
            $table->string('producto');
            $table->string('costoUnitario');
            $table->string('cantidadDisponible');
            $table->text('descripcion');
            $table->string('ubicacion');
            $table->date('fechaEntrada');
            $table->date('fechaSalida');
            $table->string('salidaDestino');
            $table->string('estado');  
            $table->string('entrega');
            $table->string('recibe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
