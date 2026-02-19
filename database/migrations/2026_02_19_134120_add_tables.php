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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->index();
            $table->longText('descripcion');
            $table->integer('ISNB');
            $table->integer('copias_totales');
            $table->integer('copias_disponibles');
            $table->boolean('estado');
        });

        schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->datetime('fecha_hora');
            $table->integer('ISNB');
            $table->date('loan_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};


