<form method="get" action="/marca_update/{{$marca->id}}">


    <div class="form-group">
        <label for="nombre_marca">Nombre marca:</label>
        <input type="text" value="{{$marca->nombre_marca}}" name="nombre_marca" class="form-control" id="nombre_marca">
    </div>
    <div class="form-group">
        <label for="observaciones_marca">Observaciones marca:</label>
        <input type="text" value="{{$marca->observaciones_marca}}" name="observaciones_marca"class="form-control" id="observaciones_marca">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>