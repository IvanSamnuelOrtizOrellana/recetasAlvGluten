<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;


class OfertaController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todasLasOfertas = Oferta::all();
        return view('ofertas',['ofertas'=>$todasLasOfertas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crear-oferta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevaOferta = new Oferta();
        $nuevaOferta->titulo = $request->titulo;
        $nuevaOferta->descripcion = $request->descripcion;
        $nuevaOferta->tienda = $request->tienda;
        $nuevaOferta->precio_original = $request->precio_original;
        $nuevaOferta->precio_descuento = $request->precio_descuento;
        $nuevaOferta->save();
        return redirect('/ofertas');
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
        $oferta = \App\Models\Oferta::findOrfail( $id );
        return view('editar-oferta',['oferta'=>$oferta]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $oferta = \App\Models\Oferta::findOrfail( $id );
        $oferta->titulo = $request->titulo;
        $oferta->descripcion = $request->descripcion;
        $oferta->tienda = $request->tienda;
        $oferta->precio_original = $request->precio_original;
        $oferta->precio_descuento = $request->precio_descuento;
        $oferta->save();
        return redirect('/ofertas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $oferta = \App\Models\Oferta::findOrFail($id);

        // 2. Le decimos al objeto que se elimine a sí mismo
        $oferta->delete();

        // 3. Recargamos la página con un mensaje
        return redirect('/ofertas');
    }
}
