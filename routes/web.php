<?php
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personas', [PersonaController::class, 'index'])->name('personas.index');
Route::get('/personas/create', [PersonaController::class, 'create'])->name('personas.create');
Route::post('/personas', [PersonaController::class, 'store'])->name('personas.store');
Route::get('/personas/{persona}/edit', [PersonaController::class, 'edit'])->name('personas.edit');
Route::put('/personas/{persona}', [PersonaController::class, 'update'])->name('personas.update');
Route::delete('/personas/{persona}', [PersonaController::class, 'destroy'])->name('personas.destroy');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');