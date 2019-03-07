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
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<form method="get" action="/formulario_ubicacion">

    <div class="form-group">
        <label for="codigo_ubicacion">Codigo ubicacion</label>
        <input type="number" name="codigo_ubicacion" class="form-control" id="codigo_ubicacion">
    </div>
    <div class="form-group">
        <label for="nombre_ubicacion">Nombre ubicacion:</label>
        <input type="text" name="nombre_ubicacion" class="form-control" id="nombre_ubicacion">
    </div>
    <div class="form-group">
        <label for="descripcion_ubicacion">Descripcion ubicacion:</label>
        <input type="text" name="descripcion_ubicacion"class="form-control" id="descripcion_ubicacion">
    </div>
    <div class="form-group">
        <label for="observaciones_ubicacion">Observaciones ubicacion:</label>
        <input type="text" class="form-control" name="observaciones_ubicacion" id="observaciones_ubicacion">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>