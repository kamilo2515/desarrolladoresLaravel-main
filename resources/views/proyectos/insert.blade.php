@extends('layouts.layout')

@section('titulo', 'Crear proyecto')

@section('content')
<h1 class="text-center">Crear nuevo proyecto</h1>
@if ($errors->any())

<div class ="alert alert-danger">
    <div class="header">
        <strong>Ups...</strong>algo salio mal
    </div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif
<br><br>
<form action="{{ route('proyectos.store') }}" method="post">
    @method('post')
    @csrf
    <div>
        <label for="nombre" class="form-label texto my-2"><h4>Nombre del proyecto</h4></label>
        <input type="text" name="nombre" id="nombre" placeholder="Nombre de proyecto" class="form-control" value="{{ old('nombre') }}">
    </div>
    <div>
        <label for="duracion" class="form-label texto my-2"><h4>Duracion del proyecto en meses</h4></label>
        <input type="number" name="duracion" id="duracion" placeholder="0" class="form-control" value="{{ old('nombre') }}">
    </div>
    <div>
        <button type="submit" class="btn btn-primary my-2"> Guardar </button>
    </div>
</form>
@endsection
