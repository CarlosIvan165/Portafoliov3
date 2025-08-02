@extends('layouts.app')

@section('contenido')
    <section class="bg-[#3B3B3B]">        
        <div class="grid items-center justify-center h-150 content-center text-center fondo-ilo">
            <div>
                <h1 class="text-6xl font-bold">Portafolio V.1</h1>
                <h1 class="tex-sm">(Proyecto personal - Réplica de portafolio)</h1>
                <p class="text-xl w-150 my-7">Este es un proyecto personal hecho de manera independiente.</p>
            </div>            
        </div>
    </section>
    <section>
        <div class="grid items-center justify-center content-center text-center">
            <img class="w-230 m-15 rounded-lg" src="{{ asset('img/portafolio1.png') }}" alt="">
        </div>
        <div class="grid items-center justify-center content-center">
            <h1 class="text-3xl font-bold">Descripción general del proyecto</h1>
            <div>
                <p class="text-xl w-150 my-7 text-justify">Este proyecto fue un ejercicio personal inspirado en un video que
                     mostraba el portafolio de otro desarrollador. A partir de capturas del video, repliqué el diseño 
                     de manera precisa, prestando atención a cada detalle visual.
                </p>
                <p class="text-xl w-150 my-7 text-justify">
                    Fue la primera vez que utilicé CSS3 de forma más extensa, ya que anteriormente solo había trabajado en 
                    proyectos más pequeños. Todo el desarrollo se realizó sin frameworks y con enfoque en un diseño responsivo,
                     aunque aún quedan algunos ajustes por hacer en las dimensiones para lograr una mejor adaptación en todos los dispositivos.
                </p>
            </div>            
        </div>
        <div class="grid items-center justify-center content-center">
            <h1 class="text-3xl font-bold">Herramientas Utilizadas</h1>
            <div class="my-7 flex gap-1">
                <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">HTML</p>
                <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">CSS</p>                        
                <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Responsive design</p>
                <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">JavaScript</p>
                <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Tailwind CSS</p>  
            </div>

            <h1 class="text-3xl font-bold mt-10">Ir al sitio</h1>
            <a class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded w-41" href="">Enlace Del Proyecto</a>
        </div>
    </section>
@endsection