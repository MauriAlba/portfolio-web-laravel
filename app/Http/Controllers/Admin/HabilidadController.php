<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Habilidad;

class HabilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $habilidades = Habilidad::orderBy(
            'nombre'
        )->get();

        return view(
            'admin.habilidades.index',
            compact('habilidades')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.habilidades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'porcentaje' => 'required|integer|min:0|max:100',
        ]);
        
        Habilidad::create([
            'nombre' => $request->nombre,
            'porcentaje' => $request->porcentaje,
            'persona_id' => 1, // Asumiendo que tienes una persona con ID 1
        ]);
        
        return redirect()
            ->route('habilidades.index')
            ->with('success', 'Habilidad creada correctamente'
        );
        
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Buscar el registro en la base de datos
        $habilidad = Habilidad::findOrFail($id);


        // Redirige a la página de edición con el registro encontrado
        return view(
            'admin.habilidades.edit',
            compact('habilidad')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|max:100',
            'porcentaje' => 'required|integer|min:0|max:100',
        ]);

        // Busca la habilidad por su ID
        $habilidad = Habilidad::findOrFail($id);
        
        // Actualiza los campos de la habilidad con los datos del formulario
        $habilidad->update($request->only(['nombre', 'porcentaje']));
        
        return redirect()
            ->route('habilidades.index')
            ->with('success', 'Habilidad actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Buscar el registro en la base de datos
        $habilidad = Habilidad::findOrFail($id);

        //Elimina el registro de la base de datos
        $habilidad->delete();
        

        // Redirige a la página de listado de habilidades con un mensaje de éxito
        return redirect()
            ->route('habilidades.index')
            ->with('success', 'Habilidad eliminada correctamente');
    }
}
