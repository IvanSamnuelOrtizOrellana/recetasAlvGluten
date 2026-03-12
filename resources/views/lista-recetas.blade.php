@extends('layouts.app')
@section('contenido')
    <div style="display: flex; justify-content: flex-end;">
    <a href="http://alvgluten-web.test/agregar-receta" target="_blank" style="display: inline-block; margin-bottom: 20px; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;" traget="_blank">
        <button>Agregar Receta</button>
    </a>
</div>
<body style="font-family: Arial, sans-serif; padding: 20px" >
<h1>Mis Rececetas Gluten-free ALVGluten 🍞🚫🌾</h1>
<ul>
    @foreach ( $recetas as $receta )
    <li style="margin-bottom :15;">
        <h2>{{ $receta->titulo }}</h2><br>
        <p><strong>Ingredientes:</strong>{{ $receta->ingredientes }}</p>
    </li>
    
    @if ($receta->gluten_free)
        <p style="color: green;"><strong>¡Esta receta es sin gluten! 🌟</strong></p>
    @else
        <p style="color: red;"><strong>¡Esta receta contiene gluten! ⚠️</strong></p>
    @endif
    
    <form action="/recetas/borrar/{{ $receta->id }}" method="POST" style="display:inline;">
    
    @csrf 
     @method('DELETE')
    
    <button type="submit" style="color: white; background-color: red; border: none; padding: 5px 10px; cursor: pointer;">
        Borrar Receta
    </button>
</form>

    @endforeach

</ul>

@endsection