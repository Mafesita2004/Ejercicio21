<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViajesTable extends Migration
{
    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->unique();
            $table->integer('num_plazas');
            $table->date('fecha');
            $table->text('otros_datos')->nullable();
            $table->foreignId('viajero_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
