@extends('vistas.inicio')
@section('content')
    <a href="/crear_modelo" class="btn btn-success">Crear</a>
    <table id="myTable">
        <caption>Lista de modelos</caption>
        <thead>
        <tr><th>Codigo</th><th>Nombre</th><th>Observaciones</th><th>Editar</th><th>Borrar</th></tr>
        </thead>
        <tbody>
        @foreach($modelos as $modelo)
            <tr><td>{{$modelo->id}}</td>
                <td>{{$modelo->nombre_modelo}}</td>
                <td>{{$modelo->observaciones_modelo}}</td>
                <td><a href="/modelo_editar/{{$modelo->id}}" class="btn btn-warning" > Editar </a></td>
                <td><a href="/modelo_borrar/{{$modelo->id}}" class="btn btn-danger" > Borrar </a></td>

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