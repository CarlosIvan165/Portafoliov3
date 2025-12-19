@extends('layouts.app')

@section('contenido')
    <section class="bg-[#3B3B3B]">        
        <div class="grid items-center justify-center h-150 content-center text-center fondo-ilo">
            <div class="w-auto max-w-140">
                <h1 class="text-6xl font-bold">EchoBlog</h1>
                <p class="text-xl mt-7">Plataforma de Blogging Dinámica </p>
                <p class="text-xl">Proyecto personal hecho con laravel y livewire</p>
            </div>            
        </div>
    </section>
    <section>
        <div class="grid items-center justify-center content-center text-center p-10 w-auto">
            {{-- <img class="w-230 m-15 rounded-lg" src="{{ asset('img/echoblog.png') }}" alt=""> --}}

            <div class="relative w-100 md:w-190 lg:w-300 max-w-5xl m-15 overflow-hidden rounded-lg">
                <!-- Slides -->
                <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/echoblog/echoblog.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/echoblog/echoblog2.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/echoblog/echoblog3.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/echoblog/echoblog4.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/echoblog/echoblog5.png') }}" alt="">
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
                <p class="my-7 text-justify">
                    EchoBlog es una plataforma de blogs desarrollada con Laravel, Livewire, Tailwind CSS y Laravel Breeze, enfocada en la creación y gestión de contenido de manera dinámica y organizada.
                </p>
                <p class="my-7 text-justify text-2xl font-bold">Funcionalidades principales:</p>
                <div>
                    <ul class="text-md space-y-1 list-disc list-inside">
                        <li class="text-xl font-bold">Gestión de autores</li>
                    </ul>
                    <p class="text-justify ml-6">Registro de autores que pueden crear y administrar sus propios posts según los temas que deseen publicar.</p> 
                </div>

                <div>
                    <ul class="text-md space-y-1 list-disc list-inside">
                        <li class="text-xl font-bold">Sistema de categorías</li>
                    </ul>
                    <p class="text-justify ml-6">
                        Las categorías permiten a los usuarios filtrar y encontrar contenido de acuerdo con sus intereses.
                        Estas se gestionan directamente desde la base de datos y se actualizan en tiempo real mediante Livewire, mejorando la experiencia de navegación.
                    </p> 
                </div>

                <div>
                    <h3 class="text-xl font-bold">Creación de posts</h3>
                    <ul class="text-md space-y-1 list-disc list-inside">
                        <li class="my-3">Asociación de posts con autores y categorías.</li>
                        <li class="my-3">Soporte para imágenes.</li>
                        <li class="my-3">Sección de comentarios para que los usuarios puedan:.</li>
                        <div class="ml-6">
                            <li class="my-3">Compartir información adicional</li>
                            <li class="my-3">Dejar sugerencias</li>
                            <li class="my-3">Debatir sobre los temas publicados</li>
                        </div>
                    </ul>  
                </div>

                <div>
                    <h3 class="text-xl font-bold">Autenticación y control de acceso</h3>
                    <ul class="text-md space-y-1 list-disc list-inside">
                        <li class="my-3">Inicio de sesión seguro mediante Laravel Breeze.</li>
                        <li class="my-3">Cada autor cuenta con su propio dashboard.</li>
                    </ul>  
                </div>

                <div>
                    <h3 class="text-xl font-bold">Autenticación y control de acceso</h3>
                    <p class="text-justify">
                        Los autores pueden visualizar y gestionar sus publicaciones:
                    </p>
                    <ul class="text-md space-y-1 list-disc list-inside ml-6">
                        <li class="my-3">Posts publicados.</li>
                        <li class="my-3">Posts en borrador.</li>
                        <li class="my-3">Posts eliminados.</li>
                    </ul>  
                </div>
                <div>
                    <ul class="text-md space-y-1 list-disc list-inside">
                        <li class="text-xl font-bold">Filtros dinámicos con Livewire</li>
                    </ul>
                    <p class="text-justify ml-6">
                        El sistema de filtrado se actualiza en tiempo real sin recargar la página, ofreciendo un acceso rápido y eficiente al contenido. 
                    </p> 
                </div>
                       
            </div>
            <div class="grid items-center justify-center content-center">
                <h1 class="text-3xl font-bold">Herramientas Utilizadas</h1>
                <div class="my-7 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-1 w-full">
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Laravel</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Livewire</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Tailwind CSS</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Laravel Breeze</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">MySQL</p>
                </div>
            </div>
            <h1 class="text-3xl font-bold mb-5">Visitar el Sitio Web</h1>
            <a class="p-3 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded w-35 text-center" href="https://echo-blog.mnz.dom.my.id/"> Abrir Enlace </a>            
        </div>
    </section>
@endsection
