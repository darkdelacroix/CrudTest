<form method="get" action="/formulario_usuario">


    <div class="form-group">
        <label for="name">Nombre usuario:</label>
        <input type="text" name="name" class="form-control" id="name">
    </div>
    <div class="form-group">
        <label for="nombre_completo">Nombre Completo:</label>
        <input type="text" name="nombre_completo"class="form-control" id="nombre_completo">
    </div>
    <div class="form-group">
        <label for="dni">DNI:</label>
        <input type="text" class="form-control" name="dni" id="dni">
    </div>

    <div class="form-group">
        <label for="password">Pass:</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" name="email" id="email">
    </div>

    <div class="form-group">
        <label for="telefono">Telefono:</label>
        <input type="text" class="form-control" name="telefono" id="telefono">
    </div>
    <label for="perfil">Perfil:</label>
    <select>
        @foreach($roles as $role)
            <option value="{{$role->id}}"> {{$role->name}} </option>
        @endforeach
    </select>

    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>