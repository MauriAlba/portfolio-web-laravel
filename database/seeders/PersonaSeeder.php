<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Persona;

class PersonaSeeder extends Seeder
{
    public function run(): void
    {
        Persona::create([
            'nombre' => 'Mauricio',
            'apellido' => 'Alba',
            'titulo' => 'Desarrollador Full Stack',
            'acerca_de' => 'Portfolio profesional desarrollado con Laravel.',
            'email' => 'mauri@example.com',
            'telefono' => '+54 0000 000000',
            'ubicacion' => 'Córdoba, Argentina'
        ]);
    }
}
