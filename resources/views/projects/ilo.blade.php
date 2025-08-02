@extends('layouts.app')

@section('contenido')
    <section class="bg-[#3B3B3B]">        
        <div class="grid items-center justify-center h-150 content-center text-center fondo-ilo">
            <div>
                <h1 class="text-6xl font-bold">Ilò living - WebMaster</h1>
                <p class="text-xl w-150 my-7">Como Webmaster, soy responsable de crear, mantener y optimizar sitios web. Me encargo tanto de tareas técnicas como de contenido, 
                    asegurando que las páginas funcionen correctamente, sean seguras, estén actualizadas y ofrezcan una carga rápida para una buena experiencia de usuario.</p>
            </div>            
        </div>
    </section>
    <section class="grid items-center justify-center content-center text-center">
        <div class="grid grid-cols-2 text-justify gap-5">
            <div class="my-3 text-lg">
                <p class="w-140 mb-2 text-lg font-semibold">La tienda <strong>iló living</strong>, especializada en artículos para el hogar, como línea blanca y muebles para la recámara. Mis responsabilidades incluían:</p>
                <ul class="w-140 space-y-1 list-disc list-inside">
                    <li>
                        Registrar nuevos productos como muebles y accesorios, así como añadir telas y colores para que el usuario los personalice a su manera.
                    </li>
                    <li>
                        Colaborar con el area de ventas para un buen manejo de precios y promociones, Dado que las promociones se cambian cada mes.
                    </li>
                    <li>
                        Colaboré con el área de Diseño Gráfico para implementar imágenes promocionales mensuales tanto en la página web como para 
                        eventos y exposiciones en los que participaba la empresa.
                    </li>
                </ul>
            </div>
            <div>
                <img class="w-110 rounded-lg" src="{{ asset('img/logo-ilo.jpg') }}" alt="Logo de empresa ilo living">
            </div>
        </div>
    </section>

    <section>
        <div class="my-20 grid items-center justify-center content-center text-center">
            <h1 class="text-3xl font-bold uppercase">Funcion Para Visualizador De Los Productos</h1>
            <div class="grid grid-cols-2 gap-5 text-justify mt-5">
                <div class="text-lg">
                    <h2 class="text-center text-xl font-bold">Visualizador dinamico</h2>
                    <p class="w-140">El visualizador dinámico adapta la apariencia en tiempo real según las selecciones realizadas a través de los swatches correspondientes. 
                        En este caso, la tela incorpora un diseño específico denominado capitonado.</p> <br>
                    <p class="w-140">La Vista 1 y la Vista 2 cuentan con sus propias telas y opciones de color, permitiendo al usuario seleccionar la que prefiera.</p> <br>
                    <p class="w-140">Al realizar una selección, se genera una ruta específica que el visualizador utiliza para mostrar las imágenes, siguiendo la estructura: 
                        "capitonado/ + tela/ + color".</p>
                </div>
                <div>
                    <img class="w-140 rounded-lg" src="{{ asset('img/visualizador-edredon.gif') }}" alt="gif de visualizador">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-5 text-justify mt-5">
                <div>
                    <img class="w-140 rounded-lg" src="{{ asset('img/configurador-edredon.gif') }}" alt="gif de visualizador">
                </div>
                <div class="text-lg my-10">
                    <p class="w-140">Los datos obtenidos tambien se usan para poderle mostrar al usuario su seleccion de tela y color en un recuadro de configuracion, 
                        aqui tambien se muestra el precio del producto.</p> <br>
                    <p class="w-140">Este visualizador se implementó en dos secciones de la página: Edredones y Colchas. Inicialmente, se planeaba extenderlo a todas 
                        las categorías de línea blanca, pero por razones externas, no se llevó a cabo.</p>
                </div>                
            </div>
            <div class="mt-3 p-3 bg-[#474747] ">
                <h1 class="font-bold text-zinc-300">Nota:</h1>
                <p class="text-zinc-400">Este visualizador se impleto en 2 seccion diferentes de la pagina las cuales fueron para "Edredones y Cobijas"</p>
            </div>
        </div>
    </section>

    <section class="my-20 grid items-center justify-center content-center text-center">
        <h1 class="text-3xl font-bold uppercase">Integracion de forma de pago openpay</h1>
        <div class="grid grid-flow-col grid-col-2 gap-4 mt-5 text-justify">
            <div class="w-70 grid justify-center content-center"> <img class="w-80" src="{{ asset('img/openpay.png') }}" alt=""></div>
            <div class="w-140">
                <p>Realicé la integración del método de pago OpenPay en un sitio web de comercio electrónico, trabajando en coordinación directa con el 
                    equipo de desarrollo de la plataforma. El proceso incluyó:</p>

                <ul class="w-140 space-y-1 list-disc list-inside p-7">
                    <li>
                        Comunicación con los desarrolladores de OpenPay para comprender y aplicar sus lineamientos técnicos.
                    </li>
                    <li>
                        Revisión y uso de la documentación oficial, seleccionando el lenguaje PHP para la implementación.
                    </li>
                    <li>
                        Configuración del formulario de pago incluyendo:
                        <ul class="w-140 space-y-1 list-disc list-inside p-3">
                            <li>
                                Imágenes de tarjetas aceptadas.
                            </li>
                            <li>
                                Elementos gráficos requeridos por OpenPay.
                            </li>
                        </ul>
                    </li>
                    <li>
                        Ajustes en el sitio web para cumplir con los requisitos de OpenPay:
                        <ul class="w-140 space-y-1 list-disc list-inside p-3">
                            <li>
                                Inclusión de la dirección física de la empresa.
                            </li>
                            <li>
                                Actualización de los términos y condiciones, especificando a OpenPay como la pasarela de pago principal.
                            </li>
                        </ul>
                    </li>
                    <li>
                        Videollamada con el equipo de OpenPay para validar y finalizar la implementación.
                    </li>
                </ul>

                <p>Esta integración aseguró una experiencia de pago segura, personalizada y alineada con los estándares de OpenPay.</p>
            </div>
        </div>
    </section>
@endsection