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
        Schema::create('reseñas_productos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Producto')->change();
            $table->foreign('id_Producto')->references('id')->on('productos');
            $table->unsignedBigInteger('id_Cliente')->change();
            $table->foreign('id_Cliente')->references('id')->on('clientes');
            $table->float('puntuacion');
            $table->string('comentario');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
