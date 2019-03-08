@extends('vistas.inicio')
@section('content')

    <table id="myTable">
        <caption>Lista de pantallas</caption>
        <thead>
        <tr><th>Codigo</th><th>Nombre</th><th>Tipo</th><th>Tamaño</th><th>Observaciones</th></tr>
        </thead>
        <tbody>
        @foreach($pantallas as $pantalla)
            <tr><td>{{$pantalla->codigo_pantalla}}</td>
                <td>{{$pantalla->nombre_pantalla}}</td>
                <td>{{$pantalla->tipo_pantalla}}</td>
                <td>{{$pantalla->tamaño_pantalla}}</td>
                <td>{{$pantalla->observaciones_pantalla}}</td>
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