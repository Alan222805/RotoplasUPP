@extends('/administrador/Comun_admin')
@section('links_diseño')
<link rel="stylesheet" href="/css/estilos_admin/crud_Agregar_principal.css">
<style>
    #descripcion{
        width: 300px;
        border: 2px solid #000;
        border-radius: 4px;
        padding: 10px;
    }
</style>
@endsection

@section('ContenidoPrincipal')
    <div class="container">
        <h1>AGREGAR CURSOS</h1>
        <form action="{{route('admin.agregar_cursos')}}" method="POST">
            @csrf
            <label for="">
                <input name="nom" placeholder="Nombre del curso" type="text" required>
            </label>
            <label for="">
                <input name="precio" placeholder="Precio" type="number" required>
            </label>
            <label for="">
                <input name="durHor" placeholder="Duracion en horas" type="number" required>
            </label>
            <label for="">
                {{-- <input name="desc" placeholder="Descripcion" type="text" required> --}}
                <textarea name="desc" placeholder="Descripcion" id="descripcion">

                </textarea>
            </label>
            <label for="">
                <input name="url" placeholder="URL Imagen" type="text" required>
            </label>
            <label for="">
                <input name="idCat" placeholder="Id Categoria" type="number" required>
            </label>

            <input class="enviar" type="submit">
        </form>
    </div>
@endsection
