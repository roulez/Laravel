@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 pt-2">
            <a href="/libros" class="btn btn-outline-primary bt-sm">Volver</a>
            <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                <h1 class="display-one">Editar Libro</h1>
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="control-group col-12">
                            <label for="titulo">Titulo</label>
                            <input type="text" id='titulo' class="form-control" name="titulo" value="{{$libro->titulo}}" placeholder="Titulo del libro..." required>
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="autor">Autor</label>
                            <input type="text" id='autor' class="form-control" name="autor" value="{{$libro->autor}}" placeholder="Autor del libro..." required>
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="anio_publicacion">Anio de publicacion</label>
                            <input type="number" id='anio_publicacion' class="form-control" name="anio_publicacion" value="{{$libro->anio_publicacion}}" placeholder="Anio de publicacion del libro..." required>
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="genero">Genero</label>
                            <select name="genero" id='genero' value="{{$libro->genero}}">
                                <option value="Fantasia">Fantasia</option>
                                <option value="CienciaFiccion">Ciencia ficcion</option>
                                <option value="Drama">Drama</option>
                                <option value="Comedia">Comedia</option>
                                <option value="Romance">Romance</option>
                            </select>
                        </div>
                        <div class="control-group col-12 mt-2">
                            <label for="disponible">Disponibilidad</label>
                            <select name="disponible" id='disponible' value="{{$libro->disponible}}">
                                <option [ngValue]="false">No disponible</option>
                                <option [ngValue]="true">Disponible</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="control-group col-12 text-center">
                            <button class="btn bt-primary">Editar Libro</button>
                        </div>
                    </div>
                </form>
            </div>         
        </div>
    </div>
</div>
@endsection