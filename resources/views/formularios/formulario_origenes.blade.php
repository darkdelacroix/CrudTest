@extends('vistas.inicio')
@section('content')
<form method="get" action="/formulario_origenes">


    <div class="form-group">
        <label for="nombre_origen">Nombre origen:</label>
        <input type="text" name="nombre_origen" class="form-control" id="nombre_origen">
    </div>
    <div class="form-group">
        <label for="observaciones_origen">Observaciones origen:</label>
        <input type="text" name="observaciones_origen"class="form-control" id="observaciones_origen">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
    @endsection