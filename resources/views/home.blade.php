<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Portfolio - {{ $persona->nombre }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <div class="text-center">

        <h1>
            {{ $persona->nombre }}
            {{ $persona->apellido }}
        </h1>

        <h3 class="text-secondary">
            {{ $persona->titulo }}
        </h3>

        <hr>

        <h2>Acerca de mí</h2>

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

</div>

</body>
</html>