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
        Schema::create('educaciones', function (Blueprint $table) {
            $table->id();

            $table->string('institucion', 150);
            $table->string('titulo', 150);

            $table->text('descripcion')->nullable();

            $table->date('fecha_inicio');
            $table->date('fecha_fin')->nullable();

            $table->string('logo')->nullable();

            $table->foreignId('persona_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('educacions');
    }
};
