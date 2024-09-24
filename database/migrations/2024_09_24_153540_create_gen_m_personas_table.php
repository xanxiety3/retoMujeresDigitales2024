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
        Schema::create('gen_m_personas', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_tipoid")->constrained("tipos_p_identificacions")->cascadeOnDelete;
            $table->string("numeroid");
            $table->string("apellido1");
            $table->string("apellido2");
            $table->string("nombre1");
            $table->string("nombre2");
            $table->date("fechanac");
            $table->foreignId("id_sexobiologico")->constrained("sex_p_listas")->cascadeOnDelete;
            $table->string("direccion");
            $table->string("tel_movil");
            $table->string("email");




            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gen_m_personas');
    }
};
