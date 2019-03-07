@extends('welcome')
@section('table')

    <table id="myTable">
        <caption>Lista de procesadores</caption>
        <thead>
        <tr><th>Codigo</th><th>Nombre</th><th>Categoria</th><th>Modelo</th><th>Frecuencia</th>
            <th>Observaciones</th></tr>
        </thead>
        <tbody>
        @foreach($procesadores as $procesador)
            <tr><td>{{$procesador->codigo_cpu}}</td>
                <td>{{$procesador->nombre_cpu}}</td>
                <td>{{$procesador->categoria_cpu}}</td>
                <td>{{$procesador->modelo_cpu}}</td>
                <td>{{$procesador->frecuencia_cpu}}</td>
                <td>{{$procesador->observaciones_cpu}}</td>
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