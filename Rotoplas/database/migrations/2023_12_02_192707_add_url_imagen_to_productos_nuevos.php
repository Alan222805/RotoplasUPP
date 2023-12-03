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
        Schema::table('productos_nuevos', function (Blueprint $table) {
            $table->string('urlImagen') ->nullable()->after('stock');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos_nuevos', function (Blueprint $table) {
            //
            $table->dropColumn('urlImagen');
        });
    }
};
