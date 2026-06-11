

<x-app-layout>
    
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Experiencias') }}
        </h2>

    </x-slot>

    <div class="container py-5">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h1>Experiencias</h1>

            <a
                href="{{ route('experiencias.create') }}"
                class="btn btn-primary">

                Nueva experiencia

            </a>

        </div>

        <table class="table table-bordered">

            <thead>

                <tr>
                    <th>Empresa</th>
                    <th>Puesto</th>
                    <th>Inicio</th>
                    <th>Fin</th>
                    <th>Acciones</th>
                </tr>

            </thead>

            <tbody>

                @foreach($experiencias as $experiencia)

                    <tr>

                        <td>{{ $experiencia->empresa }}</td>

                        <td>{{ $experiencia->puesto }}</td>

                        <td>{{ $experiencia->fecha_inicio }}</td>

                        <td>
                            {{ $experiencia->fecha_fin ?? 'Actualidad' }}
                        </td>

                        <td>

                            <a
                                href="{{ route('experiencias.edit', $experiencia) }}"
                                class="btn btn-warning btn-sm">

                                Editar

                            </a>

                            <form
                                action="{{ route('experiencias.destroy', $experiencia) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Eliminar experiencia?')">

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