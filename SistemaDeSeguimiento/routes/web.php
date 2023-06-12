<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\usuarioController;
use App\Http\Controllers\estudianteController;
use App\Http\Controllers\proyectoController;
use App\Http\Controllers\seguimientoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');
Route::get('admin/estudiantes/pdf', [estudianteController::class, 'pdf'])->name('admin.estudiantes.pdf');
Route::get('admin/estudiantes', [estudianteController::class ])->name('admin.estudiantes.index');


Route::resource('admin/usuarios', usuarioController::class)->names('admin.usuarios');
Route::resource('admin/estudiantes', estudianteController::class)->names('admin.estudiantes');

Route::resource('admin/proyectos', proyectoController::class)->names('admin.proyectos');

//Route::get('/seguimiento-proyecto/{proyecto}', seguimientoController::class)->name('admin.seguimientoProyecto.index');
//Route::resource('admin/seguimientoProyecto', seguimientoController::class)->names('admin.seguimientoProyectos');

//Route::get('seguimientoProyecto/{proyecto}', seguimientoController::class)->name('admin.seguimientoProyectos.index');
Route::prefix('admin')->group(function () {
    // Ruta de seguimiento del proyecto con ID
    Route::get('seguimientoProyecto/{proyecto}', [seguimientoController::class, 'index'])->name('admin.seguimientoProyectos.index');
  //  Route::get('seguimientoProyecto/{estudiante}', [seguimientoController::class, 'index'])->name('admin.seguimientoProyectos.index');

    // Ruta de correcciones del proyecto con ID

    // Resto de las rutas
});
