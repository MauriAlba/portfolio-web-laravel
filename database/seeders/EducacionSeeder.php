<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Educacion;

class EducacionSeeder extends Seeder
{
    public function run(): void
    {
        Educacion::create([
            'institucion' => 'Argentina Programa',
            'titulo' => 'Desarrollador Full Stack',
            'descripcion' => 'Formación en desarrollo web full stack.',
            'fecha_inicio' => '2025-01-01',
            'fecha_fin' => null,
            'persona_id' => 1
        ]);

        Educacion::create([
            'institucion' => 'Universidad Ejemplo',
            'titulo' => 'Tecnicatura en Sistemas',
            'descripcion' => 'Estudios orientados al desarrollo de software.',
            'fecha_inicio' => '2022-01-01',
            'fecha_fin' => '2024-12-31',
            'persona_id' => 1
        ]);
    }
}
