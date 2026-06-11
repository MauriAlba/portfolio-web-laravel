<x-app-layout>
    
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Educaciónes') }}
        </h2>

    </x-slot>

<div class="container py-5">

    <div class="d-flex justify-content-between mb-4">

        <h1>Educación</h1>

        <a
            href="{{ route('educaciones.create') }}"
            class="btn btn-primary">

            Nueva Educación

        </a>

    </div>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>Institución</th>
                <th>Título</th>
                <th>Inicio</th>
                <th>Fin</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

            @foreach($educaciones as $educacion)

                <tr>

                    <td>
                        {{ $educacion->institucion }}
                    </td>

                    <td>
                        {{ $educacion->titulo }}
                    </td>

                    <td>
                        {{ $educacion->fecha_inicio }}
                    </td>

                    <td>
                        {{ $educacion->fecha_fin ?? 'Actualidad' }}
                    </td>

                    <td>

                        <a
                            href="{{ route('educaciones.edit', $educacion) }}"
                            class="btn btn-warning btn-sm">

                            Editar

                        </a>

                        <form
                            action="{{ route('educaciones.destroy', $educacion) }}"
                            method="POST"
                            class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-sm btn-danger"
                                onclick="return confirm('¿Estás seguro de eliminar esta educación?')">

                                Eliminar

                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>

</x-app-layout>