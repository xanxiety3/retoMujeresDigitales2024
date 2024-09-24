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
        Schema::create('fac_m_tarjeteros', function (Blueprint $table) {
            $table->id();
            $table->string('historia');
            $table->foreignId("id_persona")->constrained("gen_m_personas")->cascadeOnDelete(); 
            $table->foreignId("id_regimen")->constrained("reg_p_listas")->cascadeOnDelete(); 
            $table->foreignId("id_eps")->constrained("gen_p_eps")->cascadeOnDelete(); //
            $table->foreignId("id_nivel")->constrained("fac_p_nivels")->cascadeOnDelete(); //

            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fac_m_tarjeteros');
    }
};
