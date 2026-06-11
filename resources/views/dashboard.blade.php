<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            Panel de Administración
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow rounded p-4">

                <h3 class="mb-4">
                    Administración del Portfolio
                </h3>

                <div class="d-grid gap-3">

                    <a
                        href="{{ route('experiencias.index') }}"
                        class="btn btn-primary">

                        Administrar Experiencias

                    </a>

                </div>

            </div>

        </div>

    </div>

</x-app-layout>
