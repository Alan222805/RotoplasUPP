@extends('/administrador/Comun_admin')
@section('links_diseño')
<link rel="stylesheet" href="/css/estilos_admin/crud_Agregar_principal.css">
<style>
    #descripcion{
        width: 300px;
        border: 2px solid #000;
        border-radius: 4px;
    }
</style>
@endsection

@section('ContenidoPrincipal')
    <div class="container">
        <h1>MODIFICAR PRODUCTO DE PAGINA PRODUCTOS</h1>
        <form action="{{route('admin.modificar_productos', $producto )}}" method="POST">

            @csrf
            @method('PUT')
            <label for="">
                <input name="nom" placeholder="Nombre" type="text" value="{{$producto->nombre}}" required>
            </label>
            <label for="">
                <input name="precio" placeholder="Precio" type="number" value="{{$producto->precio}}" required>
            </label>
            <label for="" id="label-descripcion">
                <textarea name="desc" id="descripcion" placeholder="Descripcion" type="text"  required>{{$producto->descripcion}}</textarea>
            </label>
            <label for="">
                <input name="stock" placeholder="Stock" type="number" value="{{$producto->stock}}" required>
            </label>
            <label for="">
                <input name="url" placeholder="URL Imagen" type="text" value="{{$producto->urlImagen}}" required>
            </label>
            <label for="">
                <input name="idCat" placeholder="Id Categoria" type="number" value="{{$producto->id_categoria}}" required>
            </label>

            <input class="enviar" type="submit">
        </form>
    </div>
@endsection
