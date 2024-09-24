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
        Schema::create('lab_p_pruebas', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_procedimiento")->constrained("lab_p_procedimientos")->cascadeOnDelete(); 
            $table->string(column: "codigo_prueba");
            $table->string(column: "nombre_prueba");
            $table->foreignId("id_tipo_resultado")->constrained("lab_p_tipo_resultados")->cascadeOnDelete(); 
            $table->string(column: "unidad");
            $table->boolean(column: "habilita");



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_p_pruebas');
    }
};
