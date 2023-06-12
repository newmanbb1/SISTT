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
        Schema::create('materia_asignadas', function (Blueprint $table) {
            $table->unsignedBigInteger('docente_id');
            $table->foreign('docente_id')
                ->references('id')
                ->on('docentes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('materia_id');
            $table->foreign('materia_id')
                ->references('id')
                ->on('materias')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->date('gestion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materia_asignadas');
    }
};
