<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div style="display: flex; justify-content: flex-end;">
    <a href="http://alvgluten-web.test/recetas" target="_blank" style="display: inline-block; margin-bottom: 20px; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;" traget="_blank">
        <button>Regresar</button>
    </a>
</div>
    <h1>Agregar Receta</h1>
    @if ($errors->any())
    <div style="color: red; background: #fee; padding: 10px; margin-bottom: 10px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form action="/guardar-receta" method="POST">
    @csrf

    <label>Titulo</label><br>
    <input type="text" name="titulo" value="{{ old('titulo') }}" required><br><br>

    <label>Ingredientes:</label><br>
   <textarea name="ingredientes" rows="4" cols="30" required>{{ old('ingredientes') }}</textarea><br><br>

    <label>Es Gluten-free?</label><br>

    
  <input type="hidden" name="gluten_free" value="0">
        <input type="checkbox" id="gluten_free" name="gluten_free" value="1" checked>
        <label for="gluten_free">Marca si el producto es sin gluten</label>
        <br><br>
    

    
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    Guardar Receta
</button>
</form>

    <hr>
<footer>
        <p>AlvGLuten © 2026</p>
    </footer>
</body>
</html>