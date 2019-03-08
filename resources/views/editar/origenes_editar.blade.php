
@extends('vistas.inicio')
@section('content')
    <form method="get" action="/actualizar_origenes/{{$origen->id}}">


        <div class="form-group">
            <label for="nombre_origen">Nombre origen:</label>
            <input type="text" value="{{$origen->nombre_origenes}}" name="nombre_origen" class="form-control" id="nombre_origen">
        </div>
        <div class="form-group">
            <label for="observaciones_origen">Observaciones origen:</label>
            <input type="text" value="{{$origen->observaciones_origenes}}" name="observaciones_origen"class="form-control" id="observaciones_origen">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection