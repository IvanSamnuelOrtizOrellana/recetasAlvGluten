@extends('layouts.app')

@section('contenido')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md mt-10">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Cazar una nueva oferta 🎯</h2>

    <form action="/ofertas" method="POST">
        @csrf <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Producto / Título</label>
            <input type="text" name="titulo" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Ej. Pan de caja Schär">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Descripción</label>
            <textarea name="descripcion" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Ej. Paquete de 400g, ideal para sándwiches"></textarea>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Tienda</label>
            <input type="text" name="tienda" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Ej. Walmart, Chedraui...">
        </div>

        <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
                <label class="block text-gray-700 font-bold mb-2">Precio Original ($)</label>
                <input type="number" step="0.01" name="precio_original" required class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
            </div>
            <div>
                <label class="block text-green-600 font-bold mb-2">Precio Oferta ($)</label>
                <input type="number" step="0.01" name="precio_descuento" required class="w-full px-3 py-2 border rounded-lg border-green-500 focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
        </div>

        <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-4 rounded-lg transition duration-300">
            Guardar Oferta
        </button>
    </form>
</div>
@endsection