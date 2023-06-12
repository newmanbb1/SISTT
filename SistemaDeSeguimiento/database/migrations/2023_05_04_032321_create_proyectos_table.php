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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('resumen');
            $table->date('fecha');
            $table->string('estado');
            $table->string('archivo');
            $table->string('avance');
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id')
                ->references('id')
                ->on('estudiantes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('modalidad_id');
            $table->foreign('modalidad_id')
                ->references('id')
                ->on('modalidads')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
