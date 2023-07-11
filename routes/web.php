<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\ClasesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermisosController;
use App\Http\Controllers\MaestrosController;
use App\Models\Permisos;

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



// RUTAS PARA LAS DIFERENTES SECCIONES DE LA PAGINA
Route::get('/', function () {
    return view('welcome');
});



Route::resource('/permisos', PermisosController::class)->names("permisos");
Route::resource('/maestros', MaestrosController::class)->names("maestros");
Route::resource('/alumnos', AlumnosController::class)->names("alumnos");
Route::resource('/clases', ClasesController::class)->names("clases");

// RUTAS PARA EL CRUD



// Route::post('create', [PermisosController::class, 'store'])->name('permisos.store');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
