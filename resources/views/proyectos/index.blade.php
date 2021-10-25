@extends('layouts.layout')

@section('titulo', 'Proyectos')
@section('content')
    <h1 class = "text-center pt-5 pb-3">Proyectos</h1>

    @if($mensaje = Session::get('exito'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $mensaje }}</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if ($query)
    <div class="alert alert-success alert-dismissible fade show">
        <p>Los resultadis de la busqueda <strong>{{ $query }} </strong> Son:</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <a href="{{ route('proyectos.create') }}" class="btn btn-outline-primary mb-3 float-end">Crear proyecto</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($proyectos as $proyecto)
                <tr>
                    <td> {{ $proyecto->nombre }} </td>
                    <td>
                        <a href="{{ route('proyectos.show', $proyecto->id) }}" class="btn btn-info">Detalles</a>
                        <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="post" class="d-inline-flex">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Confirma la eliminacion del proyecto  {{ $proyecto->nombre }}?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
@endsection
