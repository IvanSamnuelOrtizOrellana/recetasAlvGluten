<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;

/*<?php

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
            'ingredientes' => 'required|min:10',
            'gluten_free' => 'required|boolean'
            
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
*/

class RecetaController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todasLasRecetas = Receta::all();
        return view('lista-recetas',['recetas'=>$todasLasRecetas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agregar-receta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // 1. Usamos corchetes [ ] para el arreglo
        $validated = $request->validate([
            'titulo' => 'required|min:5',
            'ingredientes' => 'required|min:10',
            'gluten_free' => 'required|boolean'
            
        ]);

        // 2. Llamamos directamente a la Clase (Receta)
        Receta::create($validated);

        // 3. Regresamos a la página anterior con un mensaje de éxito
        return back()->with('success', 'Receta Agregada.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    
        // 1. Buscamos la receta exacta por su ID
       $receta = \App\Models\Receta::findOrFail($id);

        // 2. Le decimos al objeto que se elimine a sí mismo
        $receta->delete();

        // 3. Recargamos la página con un mensaje
        return redirect('/recetas');
    
    }
}
