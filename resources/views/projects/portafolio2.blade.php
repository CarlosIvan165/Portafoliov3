@extends('layouts.app')

@section('contenido')
    <section class="bg-[#3B3B3B]">        
        <div class="grid items-center justify-center h-150 content-center text-center fondo-ilo">
            <div class="w-auto max-w-140 p-5">
                <h1 class="text-6xl font-bold">Portafolio V.2</h1>
                <h1 class="tex-sm">Proyecto personal</h1>
                <p class="text-xl my-7">Este es un proyecto personal hecho de manera independiente.</p>
            </div>            
        </div>
    </section>
    <section>
        <div class="grid items-center justify-center content-center text-center p-10 w-auto">
            <div class="relative w-100 md:w-190 lg:w-300 max-w-5xl m-15 overflow-hidden rounded-lg">
                <!-- Slides -->
                <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/portafolio2/portafolio2.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/portafolio2/sobre.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/portafolio2/resumen.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/portafolio2/portafolio.png') }}" alt="">
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
            <div class="grid items-center justify-center content-center">
                <h1 class="text-3xl font-bold">Descripción general del proyecto</h1>
                <div>
                    <p class="text-xl my-7 text-justify">Este proyecto lo realicé con el objetivo de mejorar mi portafolio anterior. En esta ocasión 
                        utilicé SASS como una nueva herramienta para profundizar en el diseño web, ya que estaba tomando un curso de desarrollo web donde se 
                        abordaba esta tecnología. Quise extender mi aprendizaje aplicándolo directamente en un proyecto práctico, lo que me ayudó a comprender 
                        mejor su funcionamiento.
                    </p>
                    <p class="text-xl my-7 text-justify">La estructura general del sitio es similar a la de mi portafolio anterior, pero el diseño fue completamente 
                        renovado. Elegí una nueva paleta de colores y trabajé especialmente en mejorar la adaptabilidad responsiva, lo que fortaleció mis habilidades en 
                        diseño moderno y optimización para distintos dispositivos.</p>
                </div>            
            </div>
            <div class="grid items-center justify-center content-center">
                <h1 class="text-3xl font-bold">Herramientas Utilizadas</h1>
                <div class="my-7 grid grid-cols-2 lg:grid-cols-3 gap-1">
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">HTML</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">SASS</p>                        
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Responsive design</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">JavaScript</p>
                </div>
            </div>
            <h1 class="text-3xl font-bold mb-5">Visitar el Sitio Web</h1>
            <a class="p-3 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded w-35" href="https://carlosivan165.github.io/Portafoliov2/">Abrir Enlace</a>
        </div>
    </section>
@endsection