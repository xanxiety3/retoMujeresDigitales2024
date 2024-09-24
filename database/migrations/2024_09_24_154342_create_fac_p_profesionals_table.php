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
        Schema::create('fac_p_profesionals', function (Blueprint $table) {
            $table->id();
            $table->string("codigo");
            $table->foreignId("id_persona")->constrained("gen_m_personas");
            $table->string("registro_medico");
            $table->foreignId("id_tipo_prof")->constrained("tipo_prof_p_listas");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fac_p_profesionals');
    }
};
