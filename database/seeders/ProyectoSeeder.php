<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectoSeeder extends Seeder
{
    public function run(): void
    {
        Proyecto::create([
            'nombre' => 'Portfolio Web',
            'descripcion' => 'Portfolio desarrollado con Laravel.',
            'url_demo' => '#',
            'url_github' => 'https://github.com/usuario/portfolio',
            'persona_id' => 1
        ]);

        Proyecto::create([
            'nombre' => 'Sistema de Gestión',
            'descripcion' => 'Aplicación CRUD con Laravel y MySQL.',
            'url_demo' => '#',
            'url_github' => 'https://github.com/usuario/sistema',
            'persona_id' => 1
        ]);
    }
}