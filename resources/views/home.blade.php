@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')

<section class="bg-dark text-white text-center py-5">

    <div class="container">

        <h1 class="display-3">
            {{ $persona->nombre }} {{ $persona->apellido }}
        </h1>

        <p class="lead">
            {{ $persona->titulo }}
        </p>

    </div>

</section>

<section class="container py-5">

    <h2 class="text-center mb-4">
        Acerca de mí
    </h2>

    <div class="row justify-content-center">

        <div class="col-md-8 text-center">

            <p>
                {{ $persona->acerca_de }}
            </p>

            <p>
                📍 {{ $persona->ubicacion }}
            </p>

            <p>
                ✉️ {{ $persona->email }}
            </p>

            <p>
                📞 {{ $persona->telefono }}
            </p>

        </div>

    </div><

</section>

<section class="bg-light py-5">

    <div class="container">

        <h2 class="text-center mb-5">
            Experiencia Laboral
        </h2>

        <div class="row">

            @foreach($persona->experiencias as $experiencia)

                <div class="col-md-6 mb-4">

                    <div class="card h-100 shadow-sm">

                        <div class="card-body">

                            <h4>
                                {{ $experiencia->puesto }}
                            </h4>

                            <h5 class="text-secondary">
                                {{ $experiencia->empresa }}
                            </h5>

                            <p>
                                {{ $experiencia->descripcion }}
                            </p>

                            <small>
                                {{ $experiencia->fecha_inicio }}

                                @if($experiencia->fecha_fin)
                                    - {{ $experiencia->fecha_fin }}
                                @else
                                    - Actualidad
                                @endif
                            </small>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

<section class="container py-5">

    <h2 class="text-center mb-5">
        Educación
    </h2>

    <div class="row">

        @foreach($persona->educaciones as $educacion)

            <div class="col-md-6 mb-4">

                <div class="card h-100">

                    <div class="card-body">

                        <h4>{{ $educacion->titulo }}</h4>

                        <h5 class="text-secondary">
                            {{ $educacion->institucion }}
                        </h5>

                        <p>{{ $educacion->descripcion }}</p>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</section>

<section class="bg-light py-5">

    <div class="container">

        <h2 class="text-center mb-5">
            Habilidades
        </h2>

        @foreach($persona->habilidades as $habilidad)

            <div class="mb-3">

                <strong>{{ $habilidad->nombre }}</strong>

                <div class="progress">

                    <div
                        class="progress-bar"
                        role="progressbar"
                        style="width: {{ $habilidad->porcentaje }}%;">

                        {{ $habilidad->porcentaje }}%

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</section>

<section class="container py-5">

    <h2 class="text-center mb-5">
        Proyectos
    </h2>

    <div class="row">

        @foreach($persona->proyectos as $proyecto)

            <div class="col-md-6 mb-4">

                <div class="card h-100">

                    <div class="card-body">

                        <h4>{{ $proyecto->nombre }}</h4>

                        <p>{{ $proyecto->descripcion }}</p>

                        <a
                            href="{{ $proyecto->url_github }}"
                            target="_blank"
                            class="btn btn-dark">

                            GitHub

                        </a>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

</section>

@endsection