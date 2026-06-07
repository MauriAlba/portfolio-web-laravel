<?php

namespace App\Http\Controllers;

use App\Models\Persona;

class HomeController extends Controller
{
    public function index()
    {
        //$persona = Persona::first();
        $persona = Persona::with([
            'experiencias',
            'educaciones',
            'habilidades',
            'proyectos'
        ])->first();

        return view('home', compact('persona'));
    }
}
