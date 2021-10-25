<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('inicio') }}">
                <img src="{{ asset('images/sena.png') }}" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropProyectos" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Proyectos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropProyectos">
                            <li><a class="dropdown-item" href="{{ route('proyectos.index') }}">Listar</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('proyectos.create') }}">Crear nuevo</a></li>
                        </ul>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropDesarrolladore" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Desarrolladores
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropDesarrolladores">
                            <li><a class="dropdown-item" href="{{ route('desarrolladores.index') }}">Listar</a></li>
                            <li><a class="dropdown-item" href="{{ route('desarrolladores.create') }}">Crear nuevo</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                  </form>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer class="card-footer text-muted text-center footer">
        Desarrollado por <span class="fw-bold">Jhon Steven Valencia Guzmán</span> &copy; 2021
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
