@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
            <p>Laravel</p>
            <a href="/libros" class="btn btn-outline-primary">Mostrar Libros</a>
            <a href="/prestamos" class="btn btn-outline-primary">Mostrar Prestamos</a>
        </div>
    </div>
</div>
@endsection