@extends('layouts.app')
@section('content')
@if (Auth::user())
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/prestamos" class="btn btn-outline-primary bt-sm">Volver</a>
                <h1 class="display-one">Prestamo</h1>
                <p>Id usuario: {{$prestamo->user_id}}</p>
                <p>Id de libro: {{$prestamo->book_id}}</p>
                <p>Fecha Prestamo: {{$prestamo->fecha_prestamo}}</p>
                <p>Fecha devolucion: {{$prestamo->fecha_devolucion}}</p>
                <hr>
                <a href="/prestamos/{{ $prestamo->id }}/edit" class="btn btn-outline-primary">Editar Prestamo</a>
                <form action="" method="POST">
                    @method('Delete')
                    @csrf
                    <button class="btn btn-danger">Borrar Prestamo</button>
                </form>
            </div>
        </div>
    </div>
@else
    <p>No puede acceder a los prestamos a menos que se registre primero.</p>
@endif
@endsection