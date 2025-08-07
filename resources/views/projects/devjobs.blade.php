@extends('layouts.app')

@section('contenido')
    <section class="bg-[#3B3B3B]">        
        <div class="grid items-center justify-center h-150 content-center text-center fondo-ilo">
            <div class="w-auto max-w-140">
                <h1 class="text-6xl font-bold">DevJobs</h1>
                <p class="text-xl mt-7">Proyecto Del Curso de udemy</p>
                <p class="text-xl"> Laravel 9 - Crea Aplicaciones y Sitios Web con PHP 8 y MVC</p>
            </div>            
        </div>
    </section>
    <section>
        <div class="grid items-center justify-center content-center text-center p-10 w-auto">
            <div class="relative w-100 md:w-200 lg:w-300 max-w-5xl m-15 overflow-hidden rounded-lg">
                <!-- Slides -->
                <div class="flex transition-transform duration-500 ease-in-out" id="carousel">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devjobs/devjobs.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devjobs/login.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devjobs/vista-postulacion.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devjobs/vacantes-admin.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devjobs/notificaciones.png') }}" alt="">
                    <img class="w-full flex-shrink-0 rounded-lg" src="{{ asset('img/devjobs/candidatos.png') }}" alt="">
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
                <p class="my-7 text-justify"><strong>DevJobs</strong> es el segundo proyecto que desarrollé durante mi curso de Laravel. En esta aplicación se implementaron funcionalidades 
                    clave como el registro de usuarios, inicio de sesión, asignación de roles, notificaciones y un panel de administración completo.
                </p>
                <p class="my-7 text-justify">La plataforma está diseñada para conectar empresas con desarrolladores que buscan empleo. Existen dos tipos de roles:</p>
                <ul class="text-md space-y-1 list-disc list-inside">
                    <li class=""><strong>Reclutador:</strong> puede registrar una empresa, publicar vacantes laborales y gestionar las postulaciones recibidas. 
                        Cuando un developer se postula a una vacante, el reclutador recibe una notificación automática en su panel, donde puede ver todos los candidatos 
                        interesados en sus ofertas.
                    </li>
                    <li class="my-3">
                        <strong>Developer:</strong> puede registrarse en la plataforma, crear y actualizar su perfil personal (incluyendo información como nombre, email, experiencia, habilidades y CV), y postularse 
                        a las vacantes disponibles directamente desde la página principal. También cuenta con un buscador con filtros para encontrar ofertas más específicas según su perfil o intereses.
                    </li>
                </ul>
                <p class="text-lg my-7 text-justify">Para las notificaciones se utilizó el sistema Notify de Laravel, permitiendo que tanto reclutadores como developers reciban alertas en tiempo real dentro de la aplicación. 
                    Además, todo el diseño fue desarrollado con un enfoque responsivo, asegurando una visualización óptima en dispositivos móviles, tablets y escritorios.</p>
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
            <a class="p-3 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded w-35 text-center" href="https://devsjobs-carlos-ivan.mnz.dom.my.id/"> Abrir Enlace </a>            
        </div>
    </section>
@endsection
