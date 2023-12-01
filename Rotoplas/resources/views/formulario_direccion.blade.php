@extends('Comun')
@section('links_diseño')
<link rel="stylesheet" href="/css/estilos_admin/crud_Agregar_principal.css">
@endsection

@section('ContenidoPrincipal')
    <div class="container">
        <h1>AÑADIR DIRECCIÓN Y CONTACTO</h1>
        <form action="" >
            <label for="">
                <input name="est" placeholder="Estado" type="text" required>
            </label>
            <label for="">
                <input name="mun" placeholder="Municipio" type="text" required>
            </label>
            <label for="">
                <input name="loc" placeholder="Localidad" type="text" required>
            </label>
            <label for="">
                <input name="calle" placeholder="Calle" type="text" required>
            </label>
            <label for="">
                <input name="col" placeholder="Colonia" type="text" required>
            </label>
            <label for="">
                <input name="numExt" placeholder="Número Exterior" type="number" required>
            </label>
            <label for="">
                <input name="numInt" placeholder="Número Interior" type="number" >
            </label>
            <label for="">
                <input name="ref" placeholder="Referencias" type="text" required>
            </label>
            <label for="">
                <input name="codPostal" placeholder="Código Postal" type="number" required>
            </label>

            <label for="">
                <input name="tel" placeholder="Télefono" type="number" required>
            </label>

            <a href="{{route('carrito.datos_bancarios')}}"><input class="enviar" type="button"></a>
        </form>
    </div>
@endsection
