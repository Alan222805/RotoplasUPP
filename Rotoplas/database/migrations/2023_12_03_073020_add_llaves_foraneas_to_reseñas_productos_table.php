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
        Schema::table('reseñas_productos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_Producto')->change();
            $table->foreign('id_Producto')->references('id')->on('productos');
            $table->unsignedBigInteger('id_Cliente')->change();
            $table->foreign('id_Cliente')->references('id')->on('clientes');
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
