@extends('layouts.app')
@section('contenido')
<div class="mb-8 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-800">Las mejores ofertas</h1>
        <a href="/ofertas/create" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded shadow transition">
            + Agregar Oferta
        </a>
    </div>

@forelse($ofertas as $oferta)

            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 flex flex-col justify-between hover:shadow-lg transition duration-300">
                <div class="p-5">
                    
                    <div class="flex justify-between items-start mb-2">
                        <h2 class="text-xl font-bold text-gray-800">{{ $oferta->titulo }}</h2>
                        <span class="bg-blue-100 text-blue-800 text-xs font-bold px-2.5 py-1 rounded">
                            {{ $oferta->tienda }}
                        </span>
                    </div>
                    
                    <p class="text-gray-600 text-sm mb-4">{{ $oferta->descripcion }}</p>
                    
                    <div class="mt-4 flex justify-between items-end border-t border-gray-100 pt-4">
                        <div>
                            <p class="text-xs text-gray-400 uppercase tracking-wide">Antes</p>
                            <p class="text-sm text-gray-400 line-through">${{ $oferta->precio_original }}</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs text-green-500 uppercase font-bold tracking-wide">¡Oferta!</p>
                            <p class="text-2xl font-extrabold text-green-600">${{ $oferta->precio_descuento }}</p>
                        </div>
                    </div>
                    
                </div>

                <div class="bg-gray-50 p-3 border-t border-gray-100">
                    
                    <div class="bg-gray-50 p-3 border-t border-gray-100 flex gap-2">
                    
                    <a href="/ofertas/{{ $oferta->id }}/edit" class="w-1/2 text-center bg-white hover:bg-blue-50 text-blue-500 font-bold py-2 px-2 rounded border border-blue-200 transition duration-300 text-sm">
                        ✏️ Editar
                    </a>

                    <form action="/ofertas/{{ $oferta->id }}" method="POST" onsubmit="return confirm('¿Seguro que quieres borrar esta oferta?');" class="w-1/2">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="w-full bg-white hover:bg-red-50 text-red-500 font-bold py-2 px-2 rounded border border-red-200 transition duration-300 text-sm">
                            🗑️ Eliminar
                        </button>
                    </form>
                </div>
                </div>

            </div>

        @empty
            <div class="col-span-full text-center py-12 bg-white rounded-xl shadow border border-dashed border-gray-300">
                <p class="text-gray-500 text-xl mb-2">Aún no hay ofertas registradas en el radar.</p>
                <p class="text-gray-400">¡Sé el primero en compartir un descuento para la comunidad!</p>
            </div>
        @endforelse
@endsection
