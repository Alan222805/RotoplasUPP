@extends('Comun')
@section('links_diseño')
    <link rel="stylesheet" href="/css/Estilos_carrito_usuario.css">
@endsection

@section('ContenidoPrincipal')
    <section class="container-productos">
        @foreach ($productos as $product)
            <div class="producto">
                <img src="{{ $product->urlImagen }}" alt="Purificador de agua">
                <div class="especificaciones">
                    <div class="cont-titulo-producto">
                        <h2 class="titulo-producto">{{ $product->nombre }}</h2>
                    </div>
                    <div class="detalles-producto">
                        <div class="cantidad-eliminar">

                            <input class="cantidad-producto" min="0" value="{{ $product->cantidadProducto }}"
                                placeholder="Cantidad" type="number">

                            <!--<button class="boton-eliminar">Eliminar</button>-->
                            <button class="btn">
                                <svg viewBox="0 0 15 17.5" height="32" width="32" xmlns="http://www.w3.org/2000/svg"
                                    class="icon">
                                    <path transform="translate(-2.5 -1.25)"
                                        d="M15,18.75H5A1.251,1.251,0,0,1,3.75,17.5V5H2.5V3.75h15V5H16.25V17.5A1.251,1.251,0,0,1,15,18.75ZM5,5V17.5H15V5Zm7.5,10H11.25V7.5H12.5V15ZM8.75,15H7.5V7.5H8.75V15ZM12.5,2.5h-5V1.25h5V2.5Z"
                                        id="Fill"></path>
                                </svg>
                            </button>
                        </div>
                        <h2 class="precio-por-producto"> ${{ $product->precio * $product->cantidadProducto }}.00 </h2>
                    </div>
                </div>
            </div>
        @endforeach


    </section>
    <aside>
        <div id="Detalles-pedido">
            <p>Subtotal: <span>$9,500.00</span></p>
            <p>Envío: <span>$120.00</span></p>
            <p>Total: <span>$9,260.00</span></p>
        </div>
        <button>
            <a href="{{ route('carrito.formulario_direccion') }}" style="text-decoration: none">
                <p>Comprar</p>
            </a>
        </button>
    </aside>
    {{ $productos->links('pagination::bootstrap-5') }}
    @endsection

@section('archivosJS')

@endsection
