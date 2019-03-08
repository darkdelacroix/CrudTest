
    <table id="myTable">
        <caption>Lista de usuarios</caption>
        <thead>
        <tr><th>Codigo usuario</th><th>Nombre usuario</th><th>nombre</th><th>dni</th><th>password</th>
            <th>Email</th><th>Telefono</th><th>Editar</th><th>Borrar</th></tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{$usuario->id}}</td>
                <td>{{$usuario->nombre_completo}}</td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->dni}}</td>
                <td>{{$usuario->pass}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->telefono}}</td>
               <td><a href="/usuario_editar/{{$usuario->id}}" class="btn btn-warning" > Editar </a></td>
                <td><a href="/usuario_borrar/{{$usuario->id}}" class="btn btn-danger" > Borrar </a></td>


            </tr>
        @endforeach
        </tbody>
    </table>


