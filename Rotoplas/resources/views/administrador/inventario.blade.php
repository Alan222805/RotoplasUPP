@extends('/administrador/Comun_admin')
@section('links_diseño')

<style>
    table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        </style>

<link rel="stylesheet" href="/css/estilos_admin/inventario.css">

@endsection

@section('ContenidoPrincipal')
    <div>
        <h1>Inventario</h1>
        <table>
            <tr>
                <th>idProducto</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>

            @foreach ($obj as $registro)

                <tr>
                    <td>{{$registro->id}}</td>
                    <td>{{$registro->nombre}}</td>
                    <td>{{$registro->precio}}</td>
                    <td>{{$registro->stock}}</td>
                </tr>
            @endforeach

        </table>
        {{$obj->links('vendor.pagination.bootstrap-5')}}
    </div>
@endsection

@section('archivosJS')

@endsection
