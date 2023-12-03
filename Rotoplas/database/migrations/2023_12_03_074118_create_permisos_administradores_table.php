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
        Schema::create('permisos_administradores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_Administrador');
            $table->foreign('id_Administrador')->references('id')->on('administradores');
            $table->unsignedBigInteger('id_Permiso');
            $table->foreign('id_Permiso')->references('id')->on('permisos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisos_administradores');
    }
};
