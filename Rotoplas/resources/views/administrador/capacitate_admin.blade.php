@extends('/administrador/Comun_admin')
@section('links_diseño')
    <link rel="stylesheet" href="/css/estilos_admin/Estilos_Capacitate_admin.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
@endsection

@section('ContenidoPrincipal')
    <div id="btn-agregar">
        <button class="btn-agregar-producto-nuevo">
            <a href="{{route('admin.formulario_agregar_cursos')}}">
                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/>
                </svg>
            </a>
        </button>
    </div>
    <div class="container">

        @foreach ($cursos as $course)

        <div class="botones-admin">
            <div class="contenedor-botones">
                <button class="btn-editar-contenido" id="editar-contenido">
                    <a href="{{route('admin.formulario_modificar_cursos', $course)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                            <path
                                d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                        </svg>
                    </a>
                </button>
                <form action="{{route('admin.eliminar_cursos', $course)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn-eliminar-producto">
                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/>
                        </svg>
                    </button>
                </form>


            </div>

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
                        <a href="carrito_admin">
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
