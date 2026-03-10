<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;
// esto esta diciendo el url es recetas, ve a recetacontroller que es una clase, ve a su metodo mostrar recetas
Route::get('/recetas',[RecetaController::class,'index']);
Route::get('/agregar-receta',[RecetaController::class,'create']);



// 3. Ruta POST: A donde el formulario envía los datos (gracias al action="/recibe-formulario")
Route::post('/guardar-receta', [RecetaController::class, 'store']);
Route::delete('/recetas/borrar/{id}', [RecetaController::class, 'destroy']);