@extends('layouts.app')

@section('contenido')
    <section class="bg-[#3B3B3B]">        
        <div class="grid items-center justify-center h-150 content-center text-center fondo-ilo">
            <div class="w-auto max-w-140">
                <h1 class="text-6xl font-bold">Portafolio V.3</h1>
                <h1 class="tex-sm mt-7">Proyecto personal</h1>
                <p class="text-xl">Este es un proyecto personal hecho de manera independiente.</p>
            </div>            
        </div>
    </section>
    <section class="grid items-center justify-center content-center text-center">
        <div class="p-5 w-auto md:max-w-160 lg:max-w-200">
            <h1 class="text-3xl font-bold">Descripción general del proyecto</h1>
            <div class="text-lg grid grid-cols-1 text-justify">
                <p class="my-7 text-justify">Este proyecto lo desarrollé con el objetivo de seguir puliendo mis habilidades en 
                    <strong>Laravel</strong> y <strong>Tailwind CSS.</strong> Planeo ir actualizando este portafolio gradualmente para añadir 
                    nuevas funciones y mejoras.
                </p>
                <p class="my-7 text-justify">Este sitio que estás viendo es un ejemplo directo del proyecto en cuestión. Todo 
                    el desarrollo lo realicé consultando la documentación oficial de Tailwind, lo que me permitió integrar nuevos componentes 
                    y optimizar la estructura del código con buenas prácticas de diseño.</p>
            </div>            
            <div class="grid items-center justify-center content-center">
                <h1 class="text-3xl font-bold">Herramientas Utilizadas</h1>
                <div class="my-7 grid grid-cols-2 lg:grid-cols-3 gap-1 w-full">
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">HTML</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Tailwind CSS</p>                        
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Responsive design</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">JavaScript</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">laravel</p>
                </div>
            </div>
        </div>
    </section>
@endsection