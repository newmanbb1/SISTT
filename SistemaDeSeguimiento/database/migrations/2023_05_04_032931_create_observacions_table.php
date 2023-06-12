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
        Schema::create('observacions', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->unsignedBigInteger('revision_id');
            $table->foreign('revision_id')
                ->references('id')
                ->on('revisions')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('acapite_id');
            $table->foreign('acapite_id')
                ->references('id')
                ->on('acapites')
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
        Schema::dropIfExists('observacions');
    }
};
