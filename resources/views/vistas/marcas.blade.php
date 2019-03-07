@extends('vistas.inicio')

@section('content')

    <div class="container-fluid">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <a href="/crear_marca" type="" class="btn btn-success">Crear</a>
        </div>
        </br>
        <div class="row">
            @include('layouts.tabla_marcas')
        </div>

    </div>




@endsection

@section('scripts')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endsection