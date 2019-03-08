@extends('vistas.inicio')
@section('content')
    <a href="/origenes_crear" class="btn btn-success">Crear</a>

    <table id="myTable">
        <caption>Lista de origenes</caption>
        <thead>
        <tr><th>Codigo</th><th>Nombre</th><th>Observaciones</th><th>Editar</th><th>Borrar</th></tr>
        </thead>
        <tbody>
        @foreach($origenes as $origen)
            <tr><td>{{$origen->id}}</td>
                <td>{{$origen->nombre_origenes}}</td>
                <td>{{$origen->observaciones_origenes}}</td>
                <td><a href="/origen_editar/{{$origen->id}}" class="btn btn-warning" > Editar </a></td>
                <td><a href="/origen_borrar/{{$origen->id}}" class="btn btn-danger" > Borrar </a></td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable(
                {
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
                            "sSearch": "Buscar Origenes:",
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
                }
            );
        } );
    </script>
@endsection