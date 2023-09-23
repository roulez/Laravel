@extends('layouts.app')
@section('content')
@if (Auth::user())
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/prestamos" class="btn btn-outline-primary bt-sm">Volver</a>
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-one">Editar Prestamo</h1>
                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12 mt-2">
                                <label for="fecha_devolucion">Fecha de devolucion</label>
                                <input type="number" id='fecha_devolucion' class="form-control" name="fecha_devolucion" value="{{$prestamo->fecha_devolucion}}" placeholder="Fecha de devolucion del prestamo..." required>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="control-group col-12 text-center">
                                <button class="btn bt-primary">Editar Prestamo</button>
                            </div>
                        </div>
                    </form>
                </div>         
            </div>
        </div>
    </div>
@else
    <p>No puede acceder a los prestamos a menos que se registre primero.</p>
@endif
@endsection