<?php

use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PrestamosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', [LibrosController::class, 'index']);
Route::get('/libros/{idLibro}', [LibrosController::class, 'show']);
Route::get('/libros/create/libro', [LibrosController::class, 'create']);
Route::post('/libros/create/libro', [LibrosController::class, 'store']);
Route::get('/libros/{idLibro}/edit', [LibrosController::class, 'edit']);
Route::put('/libros/{idLibro}/edit', [LibrosController::class, 'update']);
Route::delete('/libros/{idLibro}', [LibrosController::class, 'destroy']);

Route::get('/prestamos', [PrestamosController::class, 'index']);
Route::get('/prestamos/{idPrestamo}', [PrestamosController::class, 'show']);
Route::get('/prestamos/create/prestamo', [PrestamosController::class, 'create']);
Route::post('/prestamos/create/prestamo', [PrestamosController::class, 'store']);
Route::get('/prestamos/{idPrestamo}/edit', [PrestamosController::class, 'edit']);
Route::put('/prestamos/{idPrestamo}/edit', [PrestamosController::class, 'update']);
Route::delete('/prestamos/{idPrestamo}', [PrestamosController::class, 'destroy']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
