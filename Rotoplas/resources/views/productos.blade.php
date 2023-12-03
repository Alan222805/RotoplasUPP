@extends('Comun')
@section('links_diseño')
    <link rel="stylesheet" href="/css/Estilos_productos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
@endsection

@section('ContenidoPrincipal')

    <div class="container">
        <!--
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
    -->
    @foreach ($product as $producto)
        <div class="producto">
            <a class="link_producto" href="#">
                <!--<img src="/Rotoplas/filtro_agua.png" alt="">-->
                <img src="{{$producto->urlImagen}}" alt="">
            </a>
            <div class="informacion_producto">
                <h1 class="nombre_producto">{{ $producto->nombre }}
                </h1>
                <h2 class="precio_producto">${{$producto->precio}}</h2>
                <div class="especs_carrito">
                    <button class="btn-abrir-popup-especs" id="btn-abrir-popup-especs">
                        <img src="/Rotoplas/especificaciones_producto.png" alt="">
                    </button>
                    <a href="{{route('user.carrito_usuario')}}">
                        <img src="/Rotoplas/carrito.png" alt="">
                    </a>

                    <div class="overlay_especs" id="overlay_especs" >
                        <div class="popup_especs" id="popup_especs" >
                            <button id="btn-cerrar-popup-especs" class="btn-cerrar-popup-especs">
                                <i class="fas fa-times"></i>
                            </button>
                            <h3>Especificaciones</h3>
                            <p>
                                {{ $producto->descripcion }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
{{$product->links('vendor.pagination.bootstrap-5')}}
    <aside class="aside">

    </aside>
@endsection

@section('archivosJS')
    <script src="/js/popUp_Principal.js"></script>
@endsection
