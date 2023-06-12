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
        Schema::create('materias_programadas', function (Blueprint $table) {
            $table->unsignedBigInteger('estudiante_id');
            $table->foreign('estudiante_id')
                ->references('id')
                ->on('estudiantes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('materia_id');
            $table->foreign('materia_id')
                ->references('id')
                ->on('materias')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->date('gestion');
            $table->integer('grupo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materias_programadas');
    }
};
