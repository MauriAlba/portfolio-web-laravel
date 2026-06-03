<?php

namespace App\Http\Controllers;

use App\Models\Persona;

class HomeController extends Controller
{
    public function index()
    {
        $persona = Persona::first();

        return view('home', compact('persona'));
    }
}
