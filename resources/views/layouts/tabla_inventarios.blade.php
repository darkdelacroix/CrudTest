@extends('vistas.inicio')

@section('content')
    <a href="/inventario_crear" class="btn btn-success">Crear</a>
    <table id="myTable">
        <caption>Lista de Inventarios</caption>
        <thead>
        <tr><th>Codigo</th><th>Nombre</th><th>Marca</th>
            <th>Modelo</th>
            <th>Numero de Serie</th>
            <th>Cpu</th>
            <th>Pantalla</th>
            <th>Origen</th>
            <th>Proveedor</th>
            <th>Estado</th>
            <th>Fecha entrada</th>
            <th>Observaciones</th>
            <th>Garantia</th>
            <th>Editar</th><th>Borrar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($inventarios as $inventario)
            <tr><td>{{$inventario->id}}</td>
                <td>{{$inventario->nombre_inventario}}</td>
                <td>{{$inventario->codigo_marca_inventario}}</td>
                <td>{{$inventario->codigo_modelo_inventario}}</td>
                <td>{{$inventario->numero_serie_inventario}}</td>
                <td>{{$inventario->codigo_cpu_inventario}}</td>
                <td>{{$inventario->codigo_pantalla_inventario}}</td>
                <td>{{$inventario->codigo_origen_inventario}}</td>
                <td>{{$inventario->codigo_proveedor_inventario}}</td>
                <td>{{$inventario->codigo_estado_inventario}}</td>
                <td>{{$inventario->fecha_entrada_inventario}}</td>
                <td>{{$inventario->observaciones_inventario}}</td>
                <td>{{$inventario->garantia_inventario}}</td>
                <td><a href="/inventario_editar/{{$inventario->id}}" class="btn btn-warning" > Editar </a></td>
                <td><a href="/inventario_borrar/{{$inventario->id}}" class="btn btn-danger" > Borrar </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection


@section('scripts')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                "language":
                    {
                        "sProcessing": "Procesando...",
                        "sLengthMenu": "Mostrar _MENU_ registros",
                        "sZeroRecords": "No se encontraron resultados",
                        "sEmptyTable": "Ningún dato disponible en esta tabla",
                        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Buscar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Último",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    }
            });
        } );
    </script>
@endsection