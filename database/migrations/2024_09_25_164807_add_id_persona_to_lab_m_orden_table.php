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
        Schema::table('lab_m_ordens', function (Blueprint $table) {
            $table->unsignedBigInteger('id_persona')->after('profesional_externo')->nullable();
            $table->foreign('id_persona')->references('id')->on('gen_m_personas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lab_m_ordens', function (Blueprint $table) {
            $table->unsignedBigInteger('id_persona')->after('profesional_externo')->nullable();
            $table->foreign('id_persona')->references('id')->on('gen_m_personas')->onDelete('cascade');
        });
    }
};
