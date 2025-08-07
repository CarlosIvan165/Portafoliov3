@extends('layouts.app')

@section('contenido')
    <section class="bg-[#3B3B3B]">        
        <div class="grid items-center justify-center h-150 content-center text-center fondo">
            <div class="hidden md:flex flex-col absolute p-4 shadow-xl/20 bg-[#2D2D2D]">
                <a class="transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-130" href=""><i class="fa-brands fa-linkedin fa-2xl my-6"></i></a>
                <a class="transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-130" href=""><i class="fa-brands fa-github fa-2xl my-6"></i></a>
                <a class="transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-130" href=""><i class="fa-brands fa-whatsapp fa-2xl my-6"></i></a>                
            </div>
            <div class="w-auto max-w-140">
                <h1 class="text-6xl font-bold">Hola, Soy Carlos Ivan</h1>
                <p class="text-xl my-7">Soy un desarrollador web orientado a soluciones, con experiencia 
                    en la creación y gestión de sitios web funcionales, dinámicos y adaptados 
                    a las necesidades del usuario.</p>
                <div class="m-3">
                    <a href="" 
                        class="p-3 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% hover:bg-teal-700 font-bold text-white rounded shadow-xl text-center"
                        >
                        Mis Proyectos
                    </a>
                </div>
            </div>            
        </div>
    </section>

    <section id="acerca" class="grid items-center justify-center content-center text-center">
        <h1 class="text-3xl font-bold">Acerca de mi</h1>
        <div class="grid grid-cols-1 text-justify w-auto max-w-160">
            <div class="my-7 text-lg p-5">
                <p class="">Soy Carlos Iván Pérez Benítez, desarrollador web con experiencia en la creación y mantenimiento de sitios web. He 
                    trabajado como freelancer y en entornos empresariales usando HTML, CSS, JavaScript, PHP, SQL y WordPress.
                    Como Webmaster en iló living, gestioné catálogos, promociones y colaboré en diseño visual.
                    También tengo experiencia en desarrollo de plugins, integraciones de pago (OpenPay, PayPal), recuperación de contraseñas personalizada y manejo de bases de datos.</p><br>

                <p class="">Me gusta resolver problemas prácticos, optimizar procesos y aprender constantemente nuevas herramientas, como Laravel, para seguir creciendo profesionalmente. Además, 
                    tengo un fuerte interés en la seguridad web, respaldos, migraciones y el diseño de interfaces claras.</p>
            </div>

            <div class="my-7">
                <h1 class="text-3xl font-bold text-center">Mis habilidades</h1>
                <div class="grid grid-cols-2 lg:flex gap-1 my-3">
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">HTML</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">WordPress</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">CSS</p>                        
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">SASS</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">MySQL</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Responsive design</p>
                </div>
                <div class="grid grid-cols-2 lg:flex gap-1">
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">PHP</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Laravel</p>                        
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">JavaScript</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">Tailwind CSS</p>
                    <p class="p-3 mx-2 bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90% rounded">GitHub</p>        
                </div>
            </div>
        </div>
    </section>

    <section id="proyectos" class="mt-30 grid items-center justify-center content-center text-center" id="proyectos">
        <h1 class="text-3xl font-bold mb-5">Mis Proyectos</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 text-left gap-5">

            <div class="w-80">
                <img class="w-full rounded-t-lg" src="{{ asset('img/devstagram/devstagram.png') }}" alt="proyecto CafeShop">
                <div class="p-3 bg-[#474747] rounded-b-lg ">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Devstagram</h5>
                    <p class="mb-3 font-normal text-white">Es un proyecto hecho en base un curso de Laravel</p>
                    <a href="{{ route('devstagram') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90%">
                        Saber mas
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="w-80">
                <img class="w-full rounded-t-lg" src="{{ asset('img/devjobs/devjobs.png') }}" alt="proyecto CafeShop">
                <div class="p-3 bg-[#474747] rounded-b-lg">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">DevJobs</h5>
                    <p class="mb-3 font-normal text-white">Es un proyecto hecho en base un curso de Laravel</p>
                    <a href="{{ route('devjobs') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90%">
                        Saber mas
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
                {{-- Codigo para cambiar de color la sombra - hover:shadow-2xl hover:shadow-sky-400 transition-shadow --}}
            <div class="w-80 ">
                <img class="w-full rounded-t-lg" src="{{ asset('img/cafe/cafe.png') }}" alt="proyecto CafeShop">
                <div class="p-3 bg-[#474747] rounded-b-lg">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Blog De Cafe</h5>
                    <p class="mb-3 font-normal text-white">Pequeño proyecto creado en base a un curso tomado en Udemy</p>
                    <a href="{{ route('blog') }}" class="transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-100 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90%">
                        Saber mas
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="w-80">
                <img class="w-full rounded-t-lg" src="{{ asset('img/portafolio1/portafolio1.png') }}" alt="proyecto CafeShop">                    
                <div class="p-3 bg-[#474747] rounded-b-lg">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Portafolio V.1</h5>
                    <p class="mb-3 font-normal text-white">Este fue el primer portafolio que hice con CSS</p>
                    <a href="{{ route('portafolio1') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90%">
                        Saber mas
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="w-80">
                <img class="w-full rounded-t-lg" src="{{ asset('img/portafolio2/portafolio2.png') }}" alt="proyecto CafeShop">                    
                <div class="p-3 bg-[#474747] rounded-b-lg">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Portafolio V.2</h5>
                    <p class="mb-3 font-normal text-white">Este es el segundo portafolio hecho con SASS</p>
                    <a href="{{ route('portafolio2') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90%">
                        Saber mas
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="w-80">
                <img class="w-full rounded-t-lg" src="{{ asset('img/portafolio3.png') }}" alt="proyecto CafeShop">                    
                <div class="p-3 bg-[#474747] rounded-b-lg">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Portafolio V.3</h5>
                    <p class="mb-3 font-normal text-white">Para mi tercer portafolio decidi cambiarlo utilizando tailwind CSS</p>
                    <a href="{{ route('portafolio3') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90%">
                        Saber mas
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="w-80 ">
                <img class="w-full rounded-t-lg" src="{{ asset('img/logo-ilo.jpg') }}" alt="proyecto CafeShop">
                <div class="p-3 bg-[#474747] rounded-b-lg">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">ilò living</h5>
                    <p class="mb-3 font-normal text-white">Estas son las implementaciones que hice durante mi tiempo en dicha empresa</p>
                    <a href="{{ route('ilo')}}" class="transition delay-50 duration-300 ease-in-out hover:-translate-y-1 hover:scale-100 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-gradient-to-b from-[#228B5C] from-35% to-[#02462E] to-90%">
                        Saber mas
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
@endsection