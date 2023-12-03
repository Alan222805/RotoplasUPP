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
        Schema::create('reseñas_cursos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente')->change();
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->unsignedBigInteger('id_curso')->change();
            $table->foreign('id_curso')->references('id')->on('cursos');
            $table->string('comentario');
            $table->float('puntuacion');
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
