@extends('/administrador/Comun_admin')

@section('links_diseño')
    <link rel="stylesheet" href="/css/Estilos_carrito_admin.css">
@endsection

@section('ContenidoPrincipal')
    <div class="container">
        <div class="herramienta">
            <a href="{{route('admin.inventario')}}">
                <h1>Inventario</h1>
            </a>
        </div>
    </div>
@endsection
