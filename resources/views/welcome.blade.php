<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Proyectos de software</title>
</head>
<body class ="alto-100">
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="titulo-principal">Proyectos de software</div>
        <div class="row">
            <div class="col text-center fs-3"><a href="{{ route('proyectos.index') }}" class="text-decoration-none">Proyectos</a></div>
            <div class="col text-center fs-3"><a href="{{ route('desarrolladores.index') }}" class="text-decoration-none">Desarrolladores</a></div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
