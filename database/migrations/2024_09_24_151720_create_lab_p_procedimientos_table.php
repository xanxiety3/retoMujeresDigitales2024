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
        Schema::create('lab_p_procedimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_cups')->constrained('fac_p_cups')->cascadeOnDelete();
            $table->foreignId('id_grupo_laboratorio')->constrained('lab_p_grupos')->cascadeOnDelete();
            $table->string("metodo");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lab_p_procedimientos');
    }
};
