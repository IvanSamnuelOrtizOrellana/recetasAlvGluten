@extends('layouts.app')
@section('contenido')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md mt-10">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Editar Oferta ✏️</h2>

    <form action="/ofertas/{{ $oferta->id }}" method="POST">
        @csrf 
        @method('PUT') <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Producto / Título</label>
            <input type="text" name="titulo" value="{{ $oferta->titulo }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Descripción</label>
            <textarea name="descripcion" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $oferta->descripcion }}</textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Tienda</label>
            <input type="text" name="tienda" value="{{ $oferta->tienda }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
                <label class="block text-gray-700 font-bold mb-2">Precio Original ($)</label>
                <input type="number" step="0.01" name="precio_original" value="{{ $oferta->precio_original }}" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-green-600 font-bold mb-2">Precio Oferta ($)</label>
                <input type="number" step="0.01" name="precio_descuento" value="{{ $oferta->precio_descuento }}" required class="w-full px-3 py-2 border rounded-lg border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
        </div>

        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
            💾 Guardar Cambios
        </button>
    </form>
</div>
@endsection