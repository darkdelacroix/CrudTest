@extends('vistas.inicio')
@section('content')
<form method="get" action="/modelo_update/{{$modelo->id}}">


    <div class="form-group">
        <label for="nombre_modelo">Nombre modelo:</label>
        <input type="text" name="nombre_modelo" value="{{$modelo->nombre_modelo}}" class="form-control" id="nombre_modelo">
    </div>
    <div class="form-group">
        <label for="observaciones_modelo">Observaciones modelo:</label>
        <input type="text" name="observaciones_modelo"class="form-control" value="{{$modelo->observaciones_modelo}}" id="observaciones_modelo">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection