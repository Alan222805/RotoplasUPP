
@extends('Comun')

@section('links_diseño')
    <link rel="stylesheet" href="/css/Estilos_Principal.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
@endsection

@section('ContenidoPrincipal')
    <div class="container">
        <span class="titulo_pagina">
            <h1 class="titulo">Lo nuevo</h1>
        </span>

        @foreach ($producto as  $product)
        <div class="productos">
            <span class="imagen-producto">
                <img src="{{$product->urlImagen}}" alt="">
            </span>
            <div class="especificaciones">
                <span class="nombre_producto">
                    <h2>{{$product->nombre}}</h2>
                </span>
                <div id="informacion_producto">
                    <span class="precio">
                        <p>${{$product->precio}}.00</p>
                    </span>
                    <span class="especificaciones">
                        <button class="btn-abrir-popup-especs" id="btn-abrir-popup-especs">
                            <img src="/Rotoplas/especificaciones_producto.png" alt="">
                        </button>
                        <p>Especificaciones</p>
                    </span>
                    <span class="carrito">
                        <a href="carrito_usuario">
                            <img src="/Rotoplas/carrito.png" alt="">
                        </a>
                        <p>Agregar al carrito</p>
                    </span>

                    <div class="overlay_especs" id="overlay_especs" style="z-index: 10">
                        <div class="popup_especs" id="popup_especs">
                            <button id="btn-cerrar-popup-especs" class="btn-cerrar-popup-especs">
                                <i class="fas fa-times"></i>
                            </button>
                            <h3>Especificaciones</h3>
                            <p>
                                {{ $product->descripcion }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    <!--
        <div class="productos">
            <span class="imagen-producto">
                <img src="/Rotoplas/purificador_agua.png" alt="">
            </span>
            <div class="especificaciones">
                <span class="nombre_producto">
                    <h2>Purificador de agua</h2>
                </span>
                <div id="informacion_producto">
                    <span class="precio">
                        <p>$5,500.00</p>
                    </span>
                    <span class="especificaciones">
                        <a href="#">
                            <img src="/Rotoplas/especificaciones_producto.png" alt="">
                        </a>
                        <p>Especificaciones</p>
                    </span>
                    <span class="carrito">
                        <a href="carrito_usuario">
                            <img src="/Rotoplas/carrito.png" alt="">
                        </a>
                        <p>Agregar al carrito</p>
                    </span>
                </div>
            </div>
        </div>
        <div class="productos">
            <span class="imagen-producto">
                <img src="/Rotoplas/tuboplus.png" alt="">
            </span>
            <div class="especificaciones">
                <span class="nombre_producto">
                    <h2>Filtro de Agua</h2>
                </span>
                <div id="informacion_producto">
                    <span class="precio">
                        <p>$2,500.00</p>
                    </span>
                    <span class="especificaciones">
                        <a href="#">
                            <img src="/Rotoplas/especificaciones_producto.png" alt="">
                        </a>
                        <p>Especificaciones</p>
                    </span>
                    <span class="carrito">
                        <a href="carrito_usuario">
                            <img src="/Rotoplas/carrito.png" alt="">
                        </a>
                        <p>Agregar al carrito</p>
                    </span>
                </div>
            </div>
        </div>

        <div class="productos">
            <span class="imagen-producto">
                <img src="/Rotoplas/tinaco.png" alt="">
            </span>
            <div class="especificaciones">
                <span class="nombre_producto">
                    <h2>Filtro de Agua</h2>
                </span>
                <div id="informacion_producto">
                    <span class="precio">
                        <p>$7,500.00</p>
                    </span>
                    <span class="especificaciones">
                        <a href="#">
                            <img src="/Rotoplas/especificaciones_producto.png" alt="">
                        </a>
                        <p>Especificaciones</p>
                    </span>
                    <span class="carrito">
                        <a href="carrito_usuario">
                            <img src="/Rotoplas/carrito.png" alt="">
                        </a>
                        <p>Agregar al carrito</p>
                    </span>
                </div>
            </div>
        </div>

        <div class="productos">
            <span class="imagen-producto">
                <img src="/Rotoplas/bomba_periférica.png" alt="">
            </span>
            <div class="especificaciones">
                <span class="nombre_producto">
                    <h2>Bomba periférica</h2>
                </span>
                <div id="informacion_producto">
                    <span class="precio">
                        <p>$10,000.00</p>
                    </span>
                    <span class="especificaciones">
                        <a href="#">
                            <img src="/Rotoplas/especificaciones_producto.png" alt="">
                        </a>
                        <p>Especificaciones</p>
                    </span>
                    <span class="carrito">
                        <a href="carrito_usuario">
                            <img src="/Rotoplas/carrito.png" alt="">
                        </a>
                        <p>Agregar al carrito</p>
                    </span>
                </div>
            </div>
        </div>
    -->
    </div>
    </div>
    <aside class="aside">
        <img src="/Rotoplas/tinaco.png" alt="">
    </aside>
@endsection

@section('archivosJS')
    <script src="/js/popUp_Principal.js"></script>
@endsection
