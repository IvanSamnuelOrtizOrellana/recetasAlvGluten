@extends('layouts.app')

@section('contenido')
    
    <div class="mb-8 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-800">Recetas de la Comunidad 👨‍🍳</h1>
        <a href="/agregar-receta" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded shadow transition">
            + Subir Receta
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        @forelse($recetas as $receta)
            <div class="max-w-sm rounded-xl overflow-hidden shadow-lg bg-white border border-gray-100 flex flex-col justify-between hover:shadow-2xl transition duration-300">
                
                <img class="w-full h-48 object-cover" src="https://images.unsplash.com/photo-1509440159596-0249088772ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Foto de receta">
                
                <div class="px-6 py-4 flex-grow">
                    <div class="font-bold text-xl mb-2 text-gray-800">{{ $receta->titulo ?? 'Receta Deliciosa' }}</div>
                    
                    <p class="text-gray-600 text-base line-clamp-3">
                        {{ $receta->descripcion ?? 'Una receta increíble para disfrutar sin preocupaciones. ¡Prepárala en casa y sorprende a todos!' }}
                    </p>
                </div>
                
                <div class="px-6 pt-2 pb-4">
                    <span class="inline-block bg-green-100 rounded-full px-3 py-1 text-xs font-bold text-green-800 mr-2 mb-2">#singluten</span>
                    <span class="inline-block bg-orange-100 rounded-full px-3 py-1 text-xs font-bold text-orange-800 mr-2 mb-2">#receta</span>
                </div>

                <div class="bg-gray-50 p-3 border-t border-gray-100 flex gap-2">
                    <a href="/recetas/borrar/{{ $receta->id }}/edit" class="w-1/2 text-center bg-white hover:bg-blue-50 text-blue-500 font-bold py-2 px-2 rounded border border-blue-200 transition duration-300 text-sm">
                        ✏️ Editar
                    </a>
                    <form action="/recetas/{{ $receta->id }}" method="POST" onsubmit="return confirm('¿Seguro que quieres borrar esta obra de arte culinaria?');" class="w-1/2">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" class="w-full bg-white hover:bg-red-50 text-red-500 font-bold py-2 px-2 rounded border border-red-200 transition duration-300 text-sm">
                            🗑️ Eliminar
                        </button>
                    </form>
                </div>

            </div>

        @empty
            <div class="col-span-full text-center py-12 bg-white rounded-xl shadow border border-dashed border-gray-300">
                <p class="text-gray-500 text-xl mb-2">Aún no hay recetas en la comunidad.</p>
                <p class="text-gray-400">¡Sé el primero en compartir tu platillo favorito!</p>
            </div>
        @endforelse

    </div>

@endsection