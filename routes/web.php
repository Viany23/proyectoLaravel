<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

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

Route::get('/hola', function () {
    return view('saludo');
});


Route::get('/alumnos', [AlumnoController::class, 'index']);

Route::get('/alumnos/crear', [AlumnoController::class, 'create']);

Route::post('/alumnos/crear',  [AlumnoController::class, 'store']);

Route::get('/alumnos/ver/{id}', [AlumnoController::class, 'show']);

Route::get('/alumnos/editar/{id}', [AlumnoController::class, 'edit']);

Route::put('/alumnos/editar/{id}',  [AlumnoController::class, 'update']);

Route::get('/alumnos/eliminar/{id}',  [AlumnoController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
