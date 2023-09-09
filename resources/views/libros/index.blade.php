@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <div class="row">
                <div class="col-8">
                    <h1 class="display-one">Laravel</h1>
                    <p>Listado de libros</p>
                </div>
                <div class="col-4">
                    <p>Registrar Libro</p>
                    <a href="/libros/create/libro" class="btn btn-outline-primary btn-sm">Crear Libro</a>
                </div>
            </div>
            @forelse ($libros as $libro)
                <ul>
                    <li>
                        <a href="/libros/{{ $libro->id }}">{{ ucfirst($libro->titulo) }}</a>
                    </li>
                </ul>
            @empty
                <p class="text-warning">No hay libros registrados</p>
            @endforelse
        </div>
    </div>
</div>
@endsection