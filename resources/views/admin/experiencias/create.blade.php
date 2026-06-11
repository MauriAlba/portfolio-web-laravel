

<x-app-layout>
    
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nueva Experiencia') }}
        </h2>

    </x-slot>

    <div class="container py-5">

        <h1>Nueva Experiencia</h1>

        <form action="{{ route('experiencias.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Empresa</label>
                <input
                    type="text"
                    name="empresa"
                    class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Puesto</label>
                <input
                    type="text"
                    name="puesto"
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

</x-app-layout>
