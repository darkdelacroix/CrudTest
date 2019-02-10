
@extends('welcome')
@section('table')

    <table id="myTable">
        <caption>Lista de compras para el sábado, 07 de julio de 2012</caption>
        <thead>
        <tr><th>Codigo</th><th>Nombre</th><th>Descripcion</th><th>Observacion</th></tr>
        </thead>
        <tbody>
        @foreach($ubicaciones as $ubicacion)
            <tr><td>{{$ubicacion->codigo_ubicacion}}</td>
                <td>{{$ubicacion->nombre_ubicacion}}</td>
                <td>{{$ubicacion->descripcion_ubicacion}}</td>
                <td>{{$ubicacion->observaciones_ubicacion}}</td>
            </tr>
            @endforeach
      </tbody>
    </table>

@endsection

@section('scripts')
    <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
    </script>
    @endsection