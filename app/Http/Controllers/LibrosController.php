<?php

namespace App\Http\Controllers;

use App\Models\libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = libros::all();
        return view('libros.index', ['libros' => $libros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libro = libros::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'anio_publicacion' => $request->anio_publicacion,
            'genero' => $request->genero,
            'disponible' => $request->disponible,
        ]);

        return redirect('libros/' . $libro->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(libros $libro)
    {
        return view('libros.show', ['libro'=> $libro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(libros $libro)
    {
        return view('libros.edit', ['libro'=> $libro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, libros $libro)
    {
        $libro->update([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'anio_publicacion' => $request->anio_publicacion,
            'genero' => $request->genero,
            'disponible' => $request->disponible,
        ]);

        return redirect('libros/' . $libro->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(libros $libro)
    {
        $libro->delete();
        return redirect('libros');
    }
}
