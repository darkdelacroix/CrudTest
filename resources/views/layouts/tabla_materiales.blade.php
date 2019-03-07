
@extends('welcome')
@section('table')

<table id="myTable">
    <caption>Lista de materiales</caption>
    <thead>
        <tr><th>Codigo</th><th>Nombre</th><th>Descripcion</th></tr>
    </thead>
    <tbody>
        @foreach($materiales as $material)
        <tr><td>{{$material->codigo_material}}</td>
            <td>{{$material->nombre_material}}</td>
            <td>{{$material->descripcion_material}}</td>
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