<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experiencia;

class ExperienciaSeeder extends Seeder
{
    public function run(): void
    {
        Experiencia::create([
            'empresa' => 'Empresa Demo',
            'puesto' => 'Desarrollador Web',
            'descripcion' => 'Desarrollo de aplicaciones web con Laravel y MySQL.',
            'fecha_inicio' => '2024-01-01',
            'fecha_fin' => null,
            'persona_id' => 1
        ]);

        Experiencia::create([
            'empresa' => 'Proyecto Freelance',
            'puesto' => 'Full Stack Developer',
            'descripcion' => 'Desarrollo de sistemas web y APIs REST.',
            'fecha_inicio' => '2023-01-01',
            'fecha_fin' => '2023-12-31',
            'persona_id' => 1
        ]);
    }
}