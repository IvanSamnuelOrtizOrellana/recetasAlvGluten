@extends('layouts.app')

@section('contenido')
    
    <div class="mb-8 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-800">Los mejores productos sin gluten🛒</h1>
        <a href="\crear-oferta" class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded shadow transition">
            + Agregar Oferta
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        
        @forelse($ofertas as $oferta)
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition duration-300">
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
            </div>

        @empty
            <div class="col-span-full text-center py-12 bg-white rounded-xl shadow border border-dashed border-gray-300">
                <p class="text-gray-500 text-xl mb-2">Aún no hay ofertas registradas en el radar.</p>
                <p class="text-gray-400">¡Sé el primero en compartir un descuento para la comunidad!</p>
            </div>
        @endforelse

    </div>

@endsection