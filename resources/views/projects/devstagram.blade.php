@extends('layouts.app')

@section('contenido')
    <section class="bg-[#3B3B3B]">        
        <div class="grid items-center justify-center h-150 content-center text-center fondo-ilo">
            <div class="w-auto max-w-140">
                <h1 class="text-6xl font-bold">Devstagram</h1>
                <p class="text-xl mt-7">Proyecto Del Curso de udemy</p>
                <p class="text-xl"> Laravel 9 - Crea Aplicaciones y Sitios Web con PHP 8 y MVC</p>
            </div>            
        </div>
    </section>
    <section>
        <div class="grid items-center justify-center content-center text-center p-10 w-auto">
            {{-- <img class="w-230 m-15 rounded-lg" src="{{ asset('img/devstagram.png') }}" alt=""> --}}

            <div class="relative w-100 md:w-190 lg:w-300 max-w-5xl m-15 overflow-hidden rounded-lg">
                <!-- Slides -->
                <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devstagram/devstagram.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devstagram/registro.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devstagram/perfil.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devstagram/crear-publicacion.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devstagram/comentario.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devstagram/buscador.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devstagram/post.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devstagram/seguir-perfil.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devstagram/post.png') }}" alt="">
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
            <div class="text-lg grid grid-cols-1 text-justify">
                <p class="my-7 text-justify">Este proyecto fue desarrollado durante un curso de Udemy y marcó mi primera experiencia
                     utilizando Laravel. Se trata de una red social estilo Instagram, donde los usuarios pueden registrarse, personalizar su perfil 
                     y compartir fotografías con títulos y descripciones.
                </p>
                <p class="my-7 text-justify">Entre sus funcionalidades principales se incluyen:</p>
                <ul class="text-md space-y-1 list-disc list-inside">
                    <li class="my-3">Registro e inicio de sesión de usuarios.</li>
                    <li class="my-3">Perfil personalizable (foto, nombre y descripción).</li>
                    <li class="my-3">Publicación de fotografías con sistema de comentarios y likes (usando Livewire para evitar recargas).</li>
                    <li class="my-3">Muro donde se visualizan publicaciones propias y de usuarios seguidos.</li>
                    <li class="my-3">Sistema de seguimiento (follow) entre usuarios.</li>
                    <li class="my-3">Funcionalidad de búsqueda activa de usuarios, desarrollada por mí fuera del curso, utilizando Livewire para mostrar resultados 
                        dinámicos desde la primera letra escrita.</li>
                </ul>
                <p class="text-lg my-7 text-justify">Este proyecto me permitió comprender la estructura de una aplicación real con Laravel y cómo integrar componentes interactivos sin recargar la página.</p>
            </div>
            <div class="grid items-center justify-center content-center">
                <h1 class="text-3xl font-bold">Herramientas Utilizadas</h1>
                <div class="my-7 grid grid-cols-2 lg:grid-cols-3 gap-1 w-full">
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">HTML</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Tailwind CSS</p>                        
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Responsive design</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">JavaScript</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">laravel</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">MySQL</p>
                </div>
            </div>
            <h1 class="text-3xl font-bold mb-5">Visitar el Sitio Web</h1>
            <a class="p-3 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded w-35 text-center" href="https://devstagram-carlos-ivan.mnz.dom.my.id/login"> Abrir Enlace </a>            
        </div>
    </section>
@endsection
