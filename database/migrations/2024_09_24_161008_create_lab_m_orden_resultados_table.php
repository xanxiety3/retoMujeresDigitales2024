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
        Schema::create('lab_m_orden_resultados', function (Blueprint $table) {
            $table->id();
            $table->date("fecha");
            $table->foreignId("id_orden")->constrained("lab_m_ordens")->cascadeOnDelete(); //
            $table->foreignId("id_procedimiento")->constrained("lab_p_procedimientos")->cascadeOnDelete(); //
            $table->foreignId("id_prueba")->constrained("lab_p_pruebas")->cascadeOnDelete(); //
            $table->foreignId("id_pruebaopcion")->constrained("lab_p_pruebas_opciones")->cascadeOnDelete(); //
            $table->string(column: "res_opcion");
            $table->string(column: "res_numerico");
            $table->string(column: "res_texto");
            $table->string(column: "res_memo");
            $table->string(column: "num_procesamiento");





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_m_orden_resultados');
    }
};
