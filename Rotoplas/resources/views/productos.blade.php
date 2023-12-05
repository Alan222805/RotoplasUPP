@extends('Comun')
@section('links_diseño')
    <link rel="stylesheet" href="/css/Estilos_productos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
@endsection

@section('ContenidoPrincipal')
    <article class="aside">
        <form action="{{ url('/productos') }}" method="get">
            <label>Categoría:</label>
            {{-- <select name="category">
            <option value="electronic">Electrónica</option>
            <option value="clothing">Ropa</option>
            <!-- Agrega más opciones según tus categorías -->
        </select> --}}

            <label>Precio Mínimo:</label>
            <input type="text" name="price_min">

            <label>Precio Máximo:</label>
            <input type="text" name="price_max">

            <!-- Otros filtros aquí... -->

            <button type="submit">Aplicar filtros</button>
            <button type="submit">Eliminar filtros</button>
        </form>
    </article>

    <div class="container">
        @foreach ($productos as $producto)
            <div class="producto">
                <a class="link_producto" href="#">
                    <!--<img src="/Rotoplas/filtro_agua.png" alt="">-->
                    <img src="{{ $producto->urlImagen }}" alt="">
                </a>
                <div class="informacion_producto">
                    <h1 class="nombre_producto">{{ $producto->nombre }}
                    </h1>
                    <h2 class="precio_producto">${{ $producto->precio }}</h2>
                    <div class="especs_carrito">
                        <button class="btn-abrir-popup-especs" id="btn-abrir-popup-especs">
                            <img src="/Rotoplas/especificaciones_producto.png" alt="">
                        </button>
                        <a href="{{ route('user.carrito_usuario') }}">
                            <img src="/Rotoplas/carrito.png" alt="">
                        </a>

                        <div class="overlay_especs" id="overlay_especs">
                            <div class="popup_especs" id="popup_especs">
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



    {{-- {{ $productos->links('vendor.pagination.bootstrap-5') }} --}}
@endsection

@section('archivosJS')
    <script src="/js/popUp_Principal.js"></script>
@endsection
