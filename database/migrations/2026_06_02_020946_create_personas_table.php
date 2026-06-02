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
        Schema::create('personas', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('titulo', 150);

            $table->text('acerca_de')->nullable();

            $table->string('foto_perfil')->nullable();
            $table->string('banner')->nullable();

            $table->string('email', 100)->nullable();
            $table->string('telefono', 50)->nullable();
            $table->string('ubicacion', 150)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
