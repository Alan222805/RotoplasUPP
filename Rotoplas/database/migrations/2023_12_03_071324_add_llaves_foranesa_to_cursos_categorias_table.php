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
        Schema::table('cursos_categorias', function (Blueprint $table) {
            $table->unsignedBigInteger('id_curso')->change();
            $table->foreign('id_curso')->references('id')->on('cursos');
            $table->unsignedBigInteger('id_categoria')->change();
            $table->foreign('id_categoria')->references('id')->on('categorias_cursos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cursos_categorias', function (Blueprint $table) {
            //
        });
    }
};
