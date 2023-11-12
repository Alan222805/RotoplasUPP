@extends('Comun')
@section('links_diseño')
    <link rel="stylesheet" href="/css/Estilos_productos.css">
@endsection

@section('ContenidoPrincipal')
    <div class="container">
        <div class="producto">
            <a class="link_producto" href="">
                <img src="/Rotoplas/purificador_agua.png" alt="">
            </a>

            <div class="informacion_producto">
                <h1 class="nombre_producto">Uso eficiente del agua</h1>
                <h2 class="precio_producto">$2,300.00</h2>
                <span class="especs_carrito">
                    <a href="#">
                        <img src="/Rotoplas/especificaciones_producto.png" alt="">
                    </a>
                    <a href="#">
                        <img src="/Rotoplas/carrito.png" alt="">
                    </a>
                </span>
            </div>
        </div>

        <div class="producto">
            <a class="link_producto" href="#">
                <img src="/Rotoplas/tinaco.png" alt="">
            </a>
            <div class="informacion_producto">
                <h1 class="nombre_producto">Servicio al cliente</h1>
                <h2 class="precio_producto">$2,500.00</h2>
                <span class="especs_carrito">
                    <a href="#">
                        <img src="/Rotoplas/especificaciones_producto.png" alt="">
                    </a>
                    <a href="#">
                        <img src="/Rotoplas/carrito.png" alt="">
                    </a>
                </span>
            </div>
        </div>

        <div class="producto">
            <a class="link_producto" href="">
                <img src="/Rotoplas/tuboplus.png" alt="">
            </a>

            <div class="informacion_producto">
                <h1 class="nombre_producto">Instalación y mantenimiento de sistemas de
                    almacenamiento de agua
                </h1>
                <h2 class="precio_producto">$5,500.00</h2>
                <span class="especs_carrito">
                    <a href="#">
                        <img src="/Rotoplas/especificaciones_producto.png" alt="">
                    </a>
                    <a href="#">
                        <img src="/Rotoplas/carrito.png" alt="">
                    </a>
                </span>
            </div>
        </div>

        <div class="producto">
            <a class="link_producto" href="#">
                <img src="/Rotoplas/filtro_agua.png" alt="">
            </a>
            <div class="informacion_producto">
                <h1 class="nombre_producto">Instalación y mantenimiento de sistemas de
                    almacenamiento de agua
                </h1>
                <h2 class="precio_producto">$5,500.00</h2>
                <span class="especs_carrito">
                    <a href="#">
                        <img src="/Rotoplas/especificaciones_producto.png" alt="">
                    </a>
                    <a href="#">
                        <img src="/Rotoplas/carrito.png" alt="">
                    </a>
                </span>
            </div>
        </div>

    </div>
    <aside class="aside">

    </aside>
@endsection
