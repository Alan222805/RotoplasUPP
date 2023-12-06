@extends('Comun')
@section('links_diseño')
    <link rel="stylesheet" href="/css/Estilos_Capacitate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
@endsection

@section('ContenidoPrincipal')
    <div class="container">

        @foreach ($cursos as $course)


        <div class="curso">
            <a class="link_curso" href="#">
                <img src="{{$course->urlImagen}}" alt="">
            </a>
            <div class="informacion_curso">
                <h1 class="nombre_curso">
                    {{$course->nombre_curso}}
                </h1>
                <h2 class="precio_curso">${{$course->precio}}.00</h2>
                <span class="especs_carrito">
                    <button class="btn-abrir-popup-especs" id="btn-abrir-popup-especs">
                        <img src="/Rotoplas/especificaciones_producto.png" alt="">
                    </button>
                    <a href="carrito_usuario">
                        <img src="/Rotoplas/carrito.png" alt="">
                    </a>
                </span>
                <div class="overlay_especs" id="overlay_especs" style="z-index: 10">
                    <div class="popup_especs" id="popup_especs">
                        <button id="btn-cerrar-popup-especs" class="btn-cerrar-popup-especs">
                            <i class="fas fa-times"></i>
                        </button>
                        <h3>Especificaciones</h3>
                        <p>
                            {{ $course->descripcion }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
    {{$cursos->links('pagination::bootstrap-5')}}
    <aside class="aside">

    </aside>
@endsection

@section('archivosJS')
    <script src="/js/popUp_Principal.js"></script>
@endsection
