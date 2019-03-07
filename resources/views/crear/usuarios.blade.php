@extends('vistas.inicio')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ups!</strong> Error.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @include('formularios.formulario_usuarios')

    <a href="/usuarios" class="btn btn-success">Usuarios</a>
@endsection