@extends('layouts.app')

@section('contenido')
    <div class="bg-white p-10 rounded-xl shadow-lg text-center max-w-3xl mx-auto">
        
        <h1 class="text-5xl font-extrabold text-gray-800 mb-6">
            ¡Bienvenido a <span class="text-lime-500">AlVGluten</span>!
        </h1>
        
        <p class="text-xl text-gray-600 mb-8">
            La mejor comunidad para vida libre de gluten con la mejores recetas y ofertas. Somos celiacos no millonarios.
        </p>
        
        <div class="flex justify-center space-x-4">
            <a href="/ofertas" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg shadow transition">
                🛒 Cazar Ofertas
            </a>
            <a href="/recetas" class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-6 rounded-lg shadow transition">
                👨‍🍳 Ver Recetas
            </a>
        </div>
        
    </div>
@endsection