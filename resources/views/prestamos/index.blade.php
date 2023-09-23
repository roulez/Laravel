@extends('layouts.app')
@section('content')
@if (Auth::user())
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Laravel</h1>
                        <p>Listado de prestamos</p>
                    </div>
                    <div class="col-4">
                        <p>Registrar Prestamo</p>
                        <a href="/prestamos/create/prestamo" class="btn btn-outline-primary btn-sm">Crear Prestamo</a>
                    </div>
                </div>
                @forelse ($prestamos as $prestamo)
                    <ul>
                        <li>
                            <a href="/prestamos/{{ $prestamo->id }}">{{ ucfirst($prestamo->user_id) }}</a>
                        </li>
                    </ul>
                @empty
                    <p class="text-warning">No hay prestamos registrados</p>
                @endforelse
            </div>
        </div>
    </div>
@else
    <p>No puede acceder a los prestamos a menos que se registre primero.</p>
@endif
@endsection