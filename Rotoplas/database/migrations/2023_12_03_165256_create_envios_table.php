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
        Schema::create('envios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_compra');
            $table->foreign('id_compra')->references('id')->on('compras');
            $table->integer('costo_envio');
            $table->string('direccion');
            $table->date('fecha_envio');
            $table->date('fecha_entrega');
            $table->string('codigo_envio');//codigo de rastreo
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envios');
    }
};
