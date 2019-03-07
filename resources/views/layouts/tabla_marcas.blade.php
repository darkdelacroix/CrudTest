
    <table id="myTable">
        <caption>Lista de marcas</caption>
        <thead>
        <tr><th>Codigo</th><th>Nombre</th><th>Observaciones</th><th>Editar</th><th>Borrar</th></tr>
        </thead>
        <tbody>
        @foreach($marcas as $marca)
            <tr><td>{{$marca->id}}</td>
                <td>{{$marca->nombre_marca}}</td>
                <td>{{$marca->observaciones_marca}}</td>
                <td><a href="/marca_editar/{{$marca->id}}" class="btn btn-warning" > Editar </a></td>
                <td><a href="/marca_borrar/{{$marca->id}}" class="btn btn-danger" > Borrar </a></td>

            </tr>
        @endforeach
        </tbody>
    </table>

