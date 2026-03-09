<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <<h1>Agregar Receta</h1>
    @if ($errors->any())
    <div style="color: red; background: #fee; padding: 10px; margin-bottom: 10px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form action="/agregarReceta" method="POST">
    @csrf

    <label>Titulo</label><br>
    <input type="text" name="titulo" value="{{ old('titulo') }}" required><br><br>

    <label>Ingredientes:</label><br>
   <textarea name="ingredientes" rows="4" cols="30" value="{{ old('ingredientes') }}"required></textarea><br><br>

    <label>Es Gluten-free?</label><br>

    
  <input type="checkbox" id="gluten_free" name="gluten_free" value="true" checked>
  <label for="gluten_free">Maraca si el producto es sin gluten</label>
    <br><br>

    

    
    <button type="submit">Enviar</button>
</form>

    <hr>
<footer>
        <p>AlvGLuten © 2026</p>
    </footer>
</body>
</html>