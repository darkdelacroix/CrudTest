@extends('welcome')
@section('table')

    <table id="myTable">
        <caption>Lista de proveedores</caption>
        <thead>
        <tr><th>Codigo proveedor</th><th>Nombre proveedor</th><th>Telefono proveedor</th>
        <th>Email proveedor</th></tr>
        </thead>
        <tbody>
        @foreach($proveedores as $proveedor)
            <tr><td>{{$proveedor->codigo_proveedor}}</td>
                <td>{{$proveedor->nombre_proveedor}}</td>
                <td>{{$proveedor->telefono_proveedor}}</td>
                <td>{{$proveedor->email_proveedor}}</td>

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