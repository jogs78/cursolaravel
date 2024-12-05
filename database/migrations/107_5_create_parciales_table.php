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
        Schema::create('parciales', function (Blueprint $table) {
            $table->id();
            $table->integer('consecutivo');
            $table->integer('puntualidad');
            $table->integer('conocimiento');
            $table->integer('equipo');
            $table->integer('dedicado'); 
            $table->integer('orden'); 
            $table->integer('mejoras'); 
            //$table->morphs('parciales');
            $table->string('ruta')->nullable()->default(null); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parcials');
    }
};
