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
        Schema::table('reseñas_cursos', function (Blueprint $table) {
            $table->unsignedBigInteger('id_cliente')->change();
            $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->unsignedBigInteger('id_curso')->change();
            $table->foreign('id_curso')->references('id')->on('cursos');
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
