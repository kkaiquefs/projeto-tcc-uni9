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
        Schema::create('books', function(Blueprint $table)
        {
            $table->id(); // ✅ Usa id() ao invés de bigIncrements
            $table->string('titulo')->unique();
            $table->string('genero');
            $table->string('autor');
            $table->text('sinopse');
            $table->decimal('avaliacao', 2, 1)->nullable();
            $table->integer('ano_lancamento');
            $table->integer('num_exemplares');
            $table->integer('num_paginas');
            $table->string('url_img');
            $table->tinyInteger('disponibilidade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
