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
        Schema::create('gen_p_eps', function (Blueprint $table) {
            $table->id();
             $table->string("codigo");
             $table->string("razonsocial");
             $table->string("nit");
             $table->boolean("habilita");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gen_p_eps');
    }
};
