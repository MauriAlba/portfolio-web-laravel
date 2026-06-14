<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Educacion;
use Illuminate\Http\Request;

class EducacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $educaciones = Educacion::orderBy(
            'fecha_inicio',
            'desc'
        )->get();

        return view(
            'admin.educaciones.index',
            compact('educaciones')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.educaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'institucion' => 'required|max:150',
            'titulo' => 'required|max:150',
            'fecha_inicio' => 'required|date',
        ]);

        Educacion::create([
            'institucion' => $request->institucion,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'persona_id' => 1,
        ]);

        return redirect()
            ->route('educaciones.index')
            ->with('success', 'Educación creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $educacion = Educacion::findOrFail($id);

        return view(
            'admin.educaciones.edit',
            compact('educacion')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'institucion' => 'required|max:150',
            'titulo' => 'required|max:150',
            'fecha_inicio' => 'required|date',
        ]);

        $educacion = Educacion::findOrFail($id);

        $educacion->update([
            'institucion' => $request->institucion,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
        ]);

        return redirect()
            ->route('educaciones.index')
            ->with('success', 'Educación actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $educacion = Educacion::findOrFail($id);

        $educacion->delete();

        return redirect()
            ->route('educaciones.index')
            ->with('success', 'Educación eliminada correctamente');
    }
}
