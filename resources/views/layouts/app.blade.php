<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Carlos Ivan Perez Benitez - Portafolio</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')    
</head>
<body class="bg-[#2D2D2D] text-white">
    <header>
        <div class="hidden md:flex px-3 sm:p-5 shadow rounded justify-between">
            <a href="{{ route('inicio') }}">Carlos Ivan Perez Benitez - Web Developer</a>
            <div class="text-lg flex flex-row-reverse gap-5 font-bold items-center px-10">
                <a href="{{ route('inicio') }}#proyectos">Proyectos</a>
                <a href="{{ route('inicio') }}#acerca">Acerca de mi</a>
                <a href="{{ route('inicio') }}">Principal</a>                        
                {{-- <a href="">Contactos</a> --}}
            </div>
        </div>
    </header>
    <header>
        <div class="flex flex-row-reverse md:hidden">
            <button id="menu-toggle" type="button" class=" p-3">
                <span class="sr-only">Open main menu</span>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-9">
                    <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
        </div>
        <div id="mobile-menu" class="hidden transition-all duration-300 md:hidden flex-col items-center gap-2 px-4 pb-4 bg-[#2D2D2D] font-bold text-lg">
            <button class="px-3 py-2 w-full rounded text-xl">
                <a class="" href="{{ route('inicio') }}#proyectos">Proyectos</a>
            </button>
            <button class="px-3 py-2 w-full rounded text-xl">
                <a href="{{ route('inicio') }}#acerca">Acerca de mi</a>
            </button>
            <button class="px-3 py-2 w-full rounded text-xl">
                <a href="{{ route('inicio') }}">Principal</a> 
            </button>
        </div> 
    </header>

    <main class="">
        <div>
            @yield('menu')
        </div>
        <h2>@yield('titulo')</h2>
        @yield('contenido')
    </main>

    <footer class="px-8 mt-10 sm:p-5 shadow rounded flex flex-col justify-between items-center">
            <div class="flex items-center gap-3 shadow-xl/20 bg-[#2D2D2D]">
                <h1 class="text-xl">Redes Sociales</h1>
                <a class="transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-130" href=""><i class="fa-brands fa-linkedin fa-2xl my-6"></i></a>
                <a class="transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-130" href=""><i class="fa-brands fa-github fa-2xl my-6"></i></a>
                <a class="transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-130" href=""><i class="fa-brands fa-whatsapp fa-2xl my-6"></i></a>                
            </div>
            <p>© Copyright 2025 . Creado por Carlos Ivan</p>
    </footer>
</body>
</html>