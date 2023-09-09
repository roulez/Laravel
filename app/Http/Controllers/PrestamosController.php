<?php

namespace App\Http\Controllers;

use App\Models\prestamos;
use Illuminate\Http\Request;

class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestamos = prestamos::all();
        return view('prestamos.index', ['prestamos' => $prestamos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prestamos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prestamo = prestamos::create([
            'user_id' => $request->user_id,
            'book_id' => $request->book_id,
            'fecha_prestamo' => $request->fecha_prestamo,
            'fecha_devolucion' => $request->fecha_devolucion
        ]);

        return redirect('prestamos/' . $prestamo->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(prestamos $prestamo)
    {
        return view('prestamos.show', ['prestamo'=> $prestamo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(prestamos $prestamo)
    {
        return view('prestamos.edit', ['prestamo'=> $prestamo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prestamos $prestamo)
    {
        $prestamo->update([
            'user_id' => $request->user_id,
            'book_id' => $request->book_id,
            'fecha_prestamo' => $request->fecha_prestamo,
            'fecha_devolucion' => $request->fecha_devolucion
        ]);

        return redirect('prestamos/' . $prestamo->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(prestamos $prestamo)
    {
        $prestamo->delete();
        return redirect('prestamos');
    }
}
