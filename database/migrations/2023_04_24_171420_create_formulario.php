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
        Schema::create('formulario', function (Blueprint $table) {
            $table->id();
            $table->string('leito');
            $table->string('paciente');
            $table->string('medico');
            $table->string('enfermeiro');
            $table->string('tecnico');
            $table->string('evolucao');
            $table->string('observacao');
            $table->datetime('data_hora_inicio');
            $table->datetime('data_hora_fim');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulario');
    }
};
