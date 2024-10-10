<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\PlazasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PuestoController;
use Illuminate\Support\Facades\Route;


Route::get('/alumnos.index', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos.create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos.store', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::get('/alumnos.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::post('/alumnos.destroy/{alumno}' , [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
Route::get('/alumnos.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::post('/alumnos.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');

Route::get('/alumnos2.index', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos2.create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos2.store', [AlumnoController::class, 'store'])->name('alumnos.store');
Route::get('/alumnos2.edit/{alumno}', [AlumnoController::class, 'edit'])->name('alumnos.edit');
Route::post('/alumnos2.destroy/{alumno}' , [AlumnoController::class, 'destroy'])->name('alumnos.destroy');
Route::get('/alumnos2.show/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');
Route::post('/alumnos2.update/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');


Route::get('/plazas.index', [PlazasController::class, 'index'])->name('plazas.index');
Route::get('/plazas.create', [PlazasController::class, 'create'])->name('plazas.create');
Route::get('/plazas.edit', [PlazasController::class, 'edit'])->name('plazas.edit');
Route::get('/plazas.destroy', [PlazasController::class, 'destroy'])->name('plazas.destroy');
Route::get('/plazas.show', [PlazasController::class, 'show'])->name('plazas.show');


Route::get('/puestos.index', [PuestoController::class, 'index'])->name('puestos.index');
Route::get('/puestos.create', [PuestoController::class, 'create'])->name('puestos.create');
Route::post('/puestos.store', [PuestoController::class, 'store'])->name('puestos.store');
Route::get('/puestos.edit/{puesto}', [PuestoController::class, 'edit'])->name('puestos.edit');
Route::post('/puestos.destroy/{puesto}' , [PuestoController::class, 'destroy'])->name('puestos.destroy');
Route::get('/puestos.show/{puesto}', [PuestoController::class, 'show'])->name('puestos.show');
Route::post('/puestos.update/{puesto}', [PuestoController::class, 'update'])->name('puestos.update');

Route::get('/', function () {
    return view('inicio');
});

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
