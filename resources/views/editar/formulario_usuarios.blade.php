<form method="get" action="/usuario_update/{{$user->id}}">


    <div class="form-group">
        <label for="nombre_usuario">Nombre usuario:</label>
        <input type="text" value="{{$user->name}}"name="nombre_usuario" class="form-control" id="nombre_usuario">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" value="{{$user->nombre_completo}}" name="nombre"class="form-control" id="nombre">
    </div>
    <div class="form-group">
        <label for="dni">DNI:</label>
        <input type="text" value="{{$user->dni}}"class="form-control" name="dni" id="dni">
    </div>

    <div class="form-group">
        <label for="dni">Pass:</label>
        <input type="text" class="form-control" name="dni" id="dni">
    </div>

    <div class="form-group">
        <label for="email">email:</label>
        <input type="text" value="{{$user->email}}" class="form-control" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="email">Telefono:</label>
        <input type="text" value="{{$user->telefono}}"class="form-control" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="perfil">Perfil:</label>
        <select>
            @foreach($roles as $role)
            <option value="{{$role->id}}">{{$role->name}} </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>