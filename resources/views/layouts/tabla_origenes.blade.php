@extends('welcome')
@section('table')

    <table id="myTable">
        <caption>Lista de origenes</caption>
        <thead>
        <tr><th>Codigo</th><th>Nombre</th><th>Observaciones</th></tr>
        </thead>
        <tbody>
        @foreach($origenes as $origen)
            <tr><td>{{$origen->codigo_origen}}</td>
                <td>{{$origen->nombre_origen}}</td>
                <td>{{$origen->observaciones_origen}}</td>
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