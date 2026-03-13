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

Route::delete('/recetas/{id}', [RecetaController::class, 'destroy']);



Route::resource('/ofertas', OfertaController::class);
Route::get('/crear-oferta', [OfertaController::class,'create']);
Route::post('/ofertas', [OfertaController::class,'store']);
Route::delete('/ofertas/borrar/{id}', [OfertaController::class,'destroy']);



Route::get('/videos', function () {
    return view('videos'); 
});