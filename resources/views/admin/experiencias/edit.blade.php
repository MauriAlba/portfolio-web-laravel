

<x-app-layout>
    
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Experiencia') }}
        </h2>

    </x-slot>
    <div class="container py-5">

        <h1>Editar Experiencia</h1>

        <form
            action="{{ route('experiencias.update', $experiencia) }}"
            method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Empresa</label>

                <input
                    type="text"
                    name="empresa"
                    value="{{ $experiencia->empresa }}"
                    class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Puesto</label>

                <input
                    type="text"
                    name="puesto"
                    value="{{ $experiencia->puesto }}"
                    class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Descripción</label>

                <textarea
                    name="descripcion"
                    class="form-control">{{ $experiencia->descripcion }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha Inicio</label>

                <input
                    type="date"
                    name="fecha_inicio"
                    value="{{ $experiencia->fecha_inicio }}"
                    class="form-control"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Fecha Fin</label>

                <input
                    type="date"
                    name="fecha_fin"
                    value="{{ $experiencia->fecha_fin }}"
                    class="form-control">
            </div>

            <button class="btn btn-primary">
                Actualizar
            </button>

        </form>

    </div>

</x-app-layout>
