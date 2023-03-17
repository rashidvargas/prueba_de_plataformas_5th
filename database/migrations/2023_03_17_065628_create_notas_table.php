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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->integer('idnota');
            $table->integer('idestudiante');
            $table->integer('idmateria');
            $table->string('idCurso',50);
            $table->integer('idperiodo');
            $table->integer('nota3');
            $table->integer('nota2');
            $table->integer('nota1');
            $table->string('fecha',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
