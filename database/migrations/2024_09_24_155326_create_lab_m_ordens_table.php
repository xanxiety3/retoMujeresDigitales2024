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
        Schema::create('lab_m_ordens', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_documento")->constrained("gen_p_documentos")->cascadeOnDelete(); //
            $table->string("orden");
            $table->date("fecha");
            $table->foreignId("id_historia")->constrained("fac_m_tarjeteros")->cascadeOnDelete(); //
            $table->foreignId("id_profesional_ordena")->constrained("fac_p_profesionals")->cascadeOnDelete(); //
            $table->boolean("profesional_externo");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_m_ordens');
    }
};
