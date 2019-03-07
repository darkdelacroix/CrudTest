
    <table id="myTable">
        <caption>Lista de ubicaciones</caption>
        <thead>
        <tr><th>Codigo</th><th>Nombre</th><th>Descripcion</th>
            <th>Observacion</th><th>Editar</th><th>Borrar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ubicaciones as $ubicacion)
            <tr><td>{{$ubicacion->codigo_ubicacion}}</td>
                <td>{{$ubicacion->nombre_ubicacion}}</td>
                <td>{{$ubicacion->descripcion_ubicacion}}</td>
                <td>{{$ubicacion->observaciones_ubicacion}}</td>
                <td><a href="/ubicacion_editar/{{$ubicacion->id}}" class="btn btn-warning" > Editar </a></td>
                <td><a href="/ubicacion_borrar/{{$ubicacion->id}}" class="btn btn-danger" > Borrar </a></td>
            </tr>
            @endforeach
      </tbody>
    </table>


