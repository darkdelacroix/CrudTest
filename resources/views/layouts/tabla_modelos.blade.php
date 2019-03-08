@extends('vistas.inicio')
@section('content')

    <table id="myTable">
        <caption>Lista de modelos</caption>
        <thead>
        <tr><th>Codigo</th><th>Nombre</th><th>Observaciones</th></tr>
        </thead>
        <tbody>
        @foreach($modelos as $modelo)
            <tr><td>{{$modelo->codigo_modelo}}</td>
                <td>{{$modelo->nombre_modelo}}</td>
                <td>{{$modelo->observaciones_modelo}}</td>
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