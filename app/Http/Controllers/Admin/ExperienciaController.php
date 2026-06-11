<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Experiencia;

class ExperienciaController extends Controller
{
    public function index()
    {
        $experiencias = Experiencia::orderBy('fecha_inicio', 'desc')->get();

        return view(
            'admin.experiencias.index',
            compact('experiencias')
        );
    }

    public function create()
    {
        return view('admin.experiencias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'empresa' => 'required|max:150',
            'puesto' => 'required|max:150',
            'fecha_inicio' => 'required|date',
        ]);

        Experiencia::create([
            'empresa' => $request->empresa,
            'puesto' => $request->puesto,
            'descripcion' => $request->descripcion,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'persona_id' => 1,
        ]);

        return redirect()
            ->route('experiencias.index')
            ->with('success', 'Experiencia creada correctamente');
    }

    public function edit(Experiencia $experiencia)
    {
        return view(
            'admin.experiencias.edit',
            compact('experiencia')
        );
    }

    public function update(Request $request, Experiencia $experiencia)
    {
        $request->validate([
            'empresa' => 'required|max:150',
            'puesto' => 'required|max:150',
            'fecha_inicio' => 'required|date',
        ]);

        $experiencia->update([
            'empresa' => $request->empresa,
            'puesto' => $request->puesto,
            'descripcion' => $request->descripcion,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
        ]);

        return redirect()
            ->route('experiencias.index')
            ->with('success', 'Experiencia actualizada');
    }

    public function destroy(Experiencia $experiencia)
    {
        $experiencia->delete();

        return redirect()
            ->route('experiencias.index')
            ->with('success', 'Experiencia eliminada');
    }


    


}
