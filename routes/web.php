<?php

use App\Http\Controllers\ProfileController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\OfertaController;



Route::get('/', function () {
    return view('inicio');
});

// -- Recetas --
Route::get('/recetas', [RecetaController::class, 'index']);
Route::get('/agregar-receta', [RecetaController::class, 'create']);
Route::post('/guardar-receta', [RecetaController::class, 'store']);
Route::delete('/recetas/{id}', [RecetaController::class, 'destroy']);

// -- Ofertas --
Route::resource('/ofertas', OfertaController::class);
Route::get('/crear-oferta', [OfertaController::class, 'create']);
Route::post('/ofertas', [OfertaController::class, 'store']);
Route::delete('/ofertas/borrar/{id}', [OfertaController::class, 'destroy']);

// -- Videos --
Route::get('/videos', function () {
    return view('videos'); 
});




// El panel de control al que entras después de hacer Login
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Las rutas para que el usuario pueda editar su perfil o borrar su cuenta
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// El motor principal de Login y Registro
require __DIR__.'/auth.php';