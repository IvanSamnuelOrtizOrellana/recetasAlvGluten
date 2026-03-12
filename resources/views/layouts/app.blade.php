<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALVgluten</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-lime-100 flex flex-col min-h-screen">
<nav class="bg-lime-500 p-4 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="flex items-center gap-3">
            <img src="{{ asset('images/logo_alvgluten.png' ) }}" alt="Logo AlVGluten" class="h-24 w-auto" >
            </a>
            
            <ul class="flex space-x-6 font-semibold">
                <li><a href="/" class="hover:text-lime-200 transition">Inicio</a></li>
                <li><a href="/ofertas" class="hover:text-lime-200 transition">Ofertas</a></li>
                <li><a href="/recetas" class="hover:text-lime-200 transition">Recetas</a></li>
                <li><a href="/videos" class="hover:text-lime-200 transition">Videos</a></li>
                
            </ul>
        </div>
    </nav>

    <main class="container mx-auto mt-8 p-4 flex-grow">
        @yield('contenido')
    </main>

    <footer class="bg-lime-700 text-center p-4 text-gray-300 mt-12">
        <p>AlVGluten © 2026</p>
    </footer>
    
</body>
</html>