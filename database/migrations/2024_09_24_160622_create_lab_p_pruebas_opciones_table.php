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
        Schema::create('lab_p_pruebas_opciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_prueba")->constrained("lab_p_pruebas")->cascadeOnDelete(); //
            $table->string(column: "opcion");
            $table->string(column: "valor_ref_min_f");
            $table->string(column: "valor_ref_max_f");
            $table->string(column: "valor_ref_min_m");
            $table->string(column: "valor_ref_max_m");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_p_pruebas_opciones');
    }
};
