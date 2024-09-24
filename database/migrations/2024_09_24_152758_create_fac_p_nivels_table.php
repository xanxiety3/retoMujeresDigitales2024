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
        Schema::create('fac_p_nivels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_eps')->constrained('gen_p_eps')->cascadeOnDelete();
            $table->string("nivel");
            $table->string("nombre");
            $table->foreignId('id_regimen')->constrained('reg_p_listas')->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fac_p_nivels');
    }
};
