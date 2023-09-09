@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/libros" class="btn btn-outline-primary bt-sm">Volver</a>
            <h1 class="display-one">{{ ucfirst($libro->titulo) }}</h1>
            <p>Autor: {{$libro->autor}}</p>
            <p>Anio publicacion: {{$libro->anio_publicacion}}</p>
            <p>Genero: {{$libro->genero}}</p>
            <p>Disponibilidad: {{$libro->disponible}}</p>
            <hr>
            <a href="/libros/{{ $libro->id }}/edit" class="btn btn-outline-primary">Editar Libro</a>
            <form action="" method="POST">
                @method('Delete')
                @csrf
                <button class="btn btn-danger">Borrar Libro</button>
            </form>
        </div>
    </div>
</div>
@endsection