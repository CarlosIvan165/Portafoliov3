@extends('layouts.app')

@section('contenido')
    <section class="bg-[#3B3B3B]">        
        <div class="grid items-center justify-center h-150 content-center text-center fondo-ilo">
            <div>
                <h1 class="text-6xl font-bold">Devstagram</h1>
                <p class="text-xl w-150 mt-7">Proyecto Del Curso de udemy</p>
                <p class="text-xl w-150"> Laravel 9 - Crea Aplicaciones y Sitios Web con PHP 8 y MVC</p>
            </div>            
        </div>
    </section>
    <section>
        <div class="grid items-center justify-center content-center text-center">
            <img class="w-230 m-15 rounded-lg" src="{{ asset('img/devstagram.png') }}" alt="">
        </div>
        <div class="grid items-center justify-center content-center">
            <h1 class="text-3xl font-bold">Descripción general del proyecto</h1>
            <div>
                <p class="text-xl w-150 my-7 text-justify">Este proyecto fue desarrollado durante un curso de Udemy y marcó mi primera experiencia
                     utilizando Laravel. Se trata de una red social estilo Instagram, donde los usuarios pueden registrarse, personalizar su perfil 
                     y compartir fotografías con títulos y descripciones.
                </p>
                <p class="text-xl w-150 my-7 text-justify">Entre sus funcionalidades principales se incluyen:</p>
                <ul class="text-lg w-140 space-y-1 list-disc list-inside">
                    <li class="my-3">Registro e inicio de sesión de usuarios.</li>
                    <li class="my-3">Perfil personalizable (foto, nombre y descripción).</li>
                    <li class="my-3">Publicación de fotografías con sistema de comentarios y likes (usando Livewire para evitar recargas).</li>
                    <li class="my-3">Muro donde se visualizan publicaciones propias y de usuarios seguidos.</li>
                    <li class="my-3">Sistema de seguimiento (follow) entre usuarios.</li>
                    <li class="my-3">Funcionalidad de búsqueda activa de usuarios, desarrollada por mí fuera del curso, utilizando Livewire para mostrar resultados 
                        dinámicos desde la primera letra escrita.</li>
                </ul>
                <p class="text-xl w-150 my-7 text-justify">Este proyecto me permitió comprender la estructura de una aplicación real con Laravel y cómo integrar componentes interactivos sin recargar la página.</p>
            </div>            
        </div>
    </section>
@endsection