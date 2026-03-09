<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;
// esto esta diciendo el url es recetas, ve a recetacontroller que es una clase, ve a su metodo mostrar recetas
Route::get('/recetas',[RecetaController::class,'mostrarRecetas']);
Route::get('/agregar-receta',[RecetaController::class,'mostrarFormulario']);



// 3. Ruta POST: A donde el formulario envía los datos (gracias al action="/recibe-formulario")
Route::post('/recetas', [RecetaController::class, 'agregarReceta']);