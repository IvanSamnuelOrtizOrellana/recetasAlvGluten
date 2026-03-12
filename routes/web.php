<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\OfertaController;

Route::get('/', function () {
    return view('inicio');
});


Route::get('/recetas',[RecetaController::class,'index']);

Route::get('/agregar-receta',[RecetaController::class,'create']);


Route::post('/guardar-receta', [RecetaController::class, 'store']);

Route::delete('/recetas/borrar/{id}', [RecetaController::class, 'destroy']);

Route::get('/ofertas', [OfertaController::class,'index']);



Route::get('/videos', function () {
    return view('videos'); 
});