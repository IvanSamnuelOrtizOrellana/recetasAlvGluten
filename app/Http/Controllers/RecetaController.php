<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;


class RecetaController extends Controller
{
    public function mostrarRecetas()
    {
        $todasLasRecetas = Receta::all();
        return view('lista-recetas',['recetas'=>$todasLasRecetas]);

    }
   
    public function mostrarFormulario()
    {
        return view('agregar-receta');
    }

    // Función 2: Sirve para RECIBIR los datos y GUARDARLOS (Ruta POST)
    public function agregarReceta(Request $request)
    {
        // 1. Usamos corchetes [ ] para el arreglo
        $validated = $request->validate([
            'titulo' => 'required|min:5',
            'ingredientes' => 'required|min:10'
            //,
            //'gluten_free' => 'required|boolean'
        ]);

        // 2. Llamamos directamente a la Clase (Receta)
        Receta::create($validated);

        // 3. Regresamos a la página anterior con un mensaje de éxito
        return back()->with('success', 'Receta Agregada.');
    }
    public function guardadaReceta()
    {
        return back()->with('success','formulario recibido');
    }

}
