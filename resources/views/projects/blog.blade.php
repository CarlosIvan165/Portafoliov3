@extends('layouts.app')

@section('contenido')
    <section class="bg-[#3B3B3B]">        
        <div class="grid items-center justify-center h-150 content-center text-center fondo-ilo">
            <div class="w-auto max-w-150">
                <h1 class="text-6xl font-bold">Blog De Cafe</h1>
                <p class="text-xl mt-7">Proyecto Del Curso de udemy</p>
                <p class="text-xl ">Desarrollo Web Completo con HTML5, CSS3, JS AJAX PHP y MySQL</p>
            </div>            
        </div>
    </section>
    <section>
        <div class="grid items-center justify-center content-center text-center p-10 w-auto">
            <div class="relative w-100 md:w-200 lg:300 max-w-5xl m-15 overflow-hidden rounded-lg">
                <!-- Slides -->
                <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/cafe/cafe.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/cafe/contacto.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/cafe/cursos.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/cafe/nosotros.png') }}" alt="">
                </div>

                <!-- Controls -->
                <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded text-white px-4 py-2">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded text-white px-4 py-2">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </section>
    <section class="grid items-center justify-center content-center text-center">
        <div class="p-5 w-auto md:max-w-160 lg:max-w-200">
            <h1 class="text-3xl font-bold">Descripción general del proyecto</h1>
            <div class="text-lg">
                <p class="my-7 text-justify">Este proyecto fue desarrollado utilizando PHP, CSS3 y JavaScript, y es uno de mis primeros trabajos antes de comenzar a trabajar con Laravel, 
                    por lo que su estructura es más sencilla en comparación con proyectos posteriores.
                </p>
                <p class="my-7 text-justify">El objetivo principal de este proyecto fue profundizar en el uso de CSS para el diseño web. Se trata de un blog básico donde se muestran cursos disponibles, 
                    sin conexión a base de datos ni funcionalidades dinámicas avanzadas. Aun así, fue una excelente oportunidad para mejorar mis habilidades en maquetación, estilos responsivos y estructura básica con HTML y CSS.</p>
            </div>
            <div class="grid items-center justify-center content-center">
                <h1 class="text-3xl font-bold">Herramientas Utilizadas</h1>
                <div class="my-7 flex gap-1 w-full">
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">HTML</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">CSS</p>                        
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Responsive design</p>
                </div>
            </div>
            <h1 class="text-3xl font-bold mb-5">Visitar el Sitio Web</h1>
            <a class="mt-2 p-3 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded w-35 text-center" href="https://carlosivan165.github.io/BlogDeCafe.io/"> Abrir Enlace </a>            
        </div>
    </section>
@endsection
