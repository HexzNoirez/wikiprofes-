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
        Schema::create('wikiprofes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('profesor');
            $table->string('nrc');
            $table->string('materia');
            $table->integer('rating');
            $table->string('comentario');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wikiprofes');
    }
};
