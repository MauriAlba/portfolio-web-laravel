<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Habilidad;

class HabilidadSeeder extends Seeder
{
    public function run(): void
    {
        Habilidad::create([
            'nombre' => 'HTML',
            'porcentaje' => 90,
            'persona_id' => 1
        ]);

        Habilidad::create([
            'nombre' => 'CSS',
            'porcentaje' => 85,
            'persona_id' => 1
        ]);

        Habilidad::create([
            'nombre' => 'Laravel',
            'porcentaje' => 80,
            'persona_id' => 1
        ]);

        Habilidad::create([
            'nombre' => 'MySQL',
            'porcentaje' => 75,
            'persona_id' => 1
        ]);
    }
}
