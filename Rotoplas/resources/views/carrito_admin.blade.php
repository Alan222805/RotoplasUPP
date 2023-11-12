@extends('Comun')

@section('links_diseño')
    <link rel="stylesheet" href="/css/Estilos_carrito_admin.css">
@endsection

@section('ContenidoPrincipal')
    <div class="container">
        <div class="inventario">
            <a href="#">
                <h1>Inventario</h1>
            </a>
        </div>
        <div class="RE">
            <a href="#">
                <h1>Reportes y Estadisticas</h1>
            </a>
        </div>
        <div class="HP">
            <a href="#">
                <h1>Historial de pedidos</h1>
            </a>
        </div>
        <div class="SE">
            <a href="#">
                <h1>Seguimiento de envios</h1>
            </a>
        </div>
        <div class="FP">
            <a href="#">
                <h1>Formas de pago</h1>
            </a>
        </div>
        <div class="AO">
            <a href="#">
                <h1>Asignar ofertas</h1>
            </a>
        </div>
    </div>
@endsection