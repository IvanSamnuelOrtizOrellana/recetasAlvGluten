<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas AlVGluten</title>
</head>
<body  >
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

    @endforeach
</ul>

</body>
</html>