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
        Schema::create('acapites', function (Blueprint $table) {
            $table->id();
            $table->integer('indice');
            $table->string('nombre');
            $table->unsignedBigInteger('capitulo_id');
            $table->foreign('capitulo_id')
                ->references('id')
                ->on('capitulos')
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
        Schema::dropIfExists('acapites');
    }
};
