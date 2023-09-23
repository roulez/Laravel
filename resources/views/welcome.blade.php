@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
            <p>Laravel</p>
            @if (Auth::user())
                <a href="/libros" class="btn btn-outline-primary">Mostrar Libros</a>
                <a href="/prestamos" class="btn btn-outline-primary">Mostrar Prestamos</a>
            @else
                <p>Para utilizar la aplicacion de prestamos, por favor registrese como usuario.</p>
            @endif
        </div>
    </div>
</div>
@endsection