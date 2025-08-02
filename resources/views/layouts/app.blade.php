<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Mi Portafolio</title>
    @vite('resources/css/app.css')    
</head>
<body class="bg-[#2D2D2D] text-white">
    <header class="px-8 sm:p-5 shadow rounded">
        <div class="text-lg flex flex-row-reverse gap-5 font-bold items-center px-10">
            <a href="{{ route('inicio') }}#proyectos">Mis Proyectos</a>
            <a href="{{ route('inicio') }}#acerca">Acerca de mi</a>
            <a href="{{ route('inicio') }}">Principal</a>            
            {{-- <a href="">Contactos</a> --}}
        </div>
    </header>

    <main class="">
        <div>
            @yield('menu')
        </div>
        <h2>@yield('titulo')</h2>
        @yield('contenido')
    </main>

    <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
        <div class="grid grid-cols-2">
            <div>
                <h1 class="text-xl">Redes Sociales</h1>
            </div>
            <div>
                <p>© Copyright 2025 . Creado por Carlos Ivan Perez Benitez</p>
            </div>
        </div>
    </footer>
</body>
</html>