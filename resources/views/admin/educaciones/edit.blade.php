@extends('admin.layouts.app')

@section('title', 'Editar Educación')
@section('header', 'Editar Educación')

@section('content')

    <div class="container py-5">

        <h1>Editar Educación</h1>

        <form
            action="{{ route('educaciones.update', $educacion) }}"
            method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Institución</label>

                <input
                    type="text"
                    name="institucion"
                    value="{{ $educacion->institucion }}"
                    class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Título</label>

                <input
                    type="text"
                    name="titulo"
                    value="{{ $educacion->titulo     }}"
                    class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción</label>

                <textarea
                    name="descripcion"
                    class="form-control">{{ $educacion ->descripcion }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha Inicio</label>

                <input
                    type="date"
                    name="fecha_inicio"
                    value="{{ $educacion->fecha_inicio }}"
                    class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha Fin</label>

                <input
                    type="date"
                    name="fecha_fin"
                    value="{{ $educacion->fecha_fin }}"
                    class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">
                Guardar Cambios
            </button>

        </form>
    </div>
@endsection