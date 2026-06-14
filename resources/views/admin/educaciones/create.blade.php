@extends('admin.layouts.app')

@section('title', 'Nueva Educación')
@section('header', 'Agregar Educación')

@section('content')

    <div class="container py-5">

        <h1>Nueva Educación</h1>

        <form action="{{ route('educaciones.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Institución</label>
                <input
                    type="text"
                    name="institucion"
                    class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Título</label>
                <input
                    type="text"
                    name="titulo"
                    class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea
                    name="descripcion"
                    class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha Inicio</label>
                <input
                    type="date"
                    name="fecha_inicio"
                    class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha Fin</label>
                <input
                    type="date"
                    name="fecha_fin"
                    class="form-control">
            </div>

            <button class="btn btn-primary">
                Guardar
            </button>

        </form>

    </div>

@endsection
