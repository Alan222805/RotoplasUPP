@extends('/administrador/Comun_admin')
@section('links_diseño')
<link rel="stylesheet" href="/css/estilos_admin/crud_Agregar_principal.css">
@endsection

@section('ContenidoPrincipal')
    <div class="container">
        <h1>CREAR PRODUCTO</h1>
        <form action="{{route('admin.crearProducto')}}" method="POST">
            @csrf
            <label for="">
                <input name="nom" placeholder="Nombre" type="text" required>
            </label>
            <label for="">
                <input name="precio" placeholder="Precio" type="number" required>
            </label>
            <label for="">
                <input name="desc" placeholder="Descripcion" type="text" required>
            </label>
            <label for="">
                <input name="stock" placeholder="Stock" type="number" required>
            </label>
            <label for="">
                <input name="url" placeholder="URL de imagen" type="text" required>
            </label>
            <label for="">
                <input name="idCat" placeholder="Id Categoria" type="number" required>
            </label>

            <input class="enviar" type="submit">
        </form>
    </div>
@endsection
