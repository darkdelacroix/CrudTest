<form method="get" action="/formulario_update/{{$ubicacion->id}}">

    <div class="form-group">
        <label for="codigo_ubicacion">Codigo ubicacion</label>
        <input type="number" name="codigo_ubicacion" class="form-control" id="codigo_ubicacion" value="{{$ubicacion->codigo_ubicacion}}">
    </div>
    <div class="form-group">
        <label for="nombre_ubicacion">Nombre ubicacion:</label>
        <input value="{{$ubicacion->nombre_ubicacion}}" type="text" name="nombre_ubicacion" class="form-control" id="nombre_ubicacion">
    </div>
    <div class="form-group">
        <label for="descripcion_ubicacion">Descripcion ubicacion:</label>
        <input value="{{$ubicacion->descripcion_ubicacion}}" type="text" name="descripcion_ubicacion"class="form-control" id="descripcion_ubicacion">
    </div>
    <div class="form-group">
        <label for="observaciones_ubicacion">Observaciones ubicacion:</label>
        <input  value="{{$ubicacion->observaciones_ubicacion}}" type="text" class="form-control" name="observaciones_ubicacion" id="observaciones_ubicacion">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>