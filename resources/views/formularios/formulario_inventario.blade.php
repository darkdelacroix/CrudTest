@extends('vistas.inicio')

@section('content')



    <form method="get" action="/formulario_inventario">


        <div class="form-group">
            <label for="nombre_inventario">Nombre inventario:</label>
            <input type="number" name="nombre_inventario" class="form-control" id="nombre_inventario">
        </div>
        <div class="form-group">
            <label for="codigo_marca_inventario">Marca</label>
            <select name="codigo_marca_inventario">
                <option value="" >Elije una</option>
                @foreach($marcas as $marca)
                    <option value="{{$marca->id}}">{{$marca->nombre_marca}}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="codigo_modelo_inventario">Modelo</label>
            <select name="codigo_modelo_inventario">
                <option  value="">Elije una</option>
                @foreach($modelos as $modelo)
                    <option value="{{$modelo->id}}">{{$modelo->nombre_modelo}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="numero_serie_inventario">Numero serie:</label>
            <input type="text" name="numero_serie_inventario" class="form-control" id="numero_serie_inventario">
        </div>
        <div class="form-group">
            <label for="codigo_cpu_inventario">Procesador:</label>
            <select name="codigo_cpu_inventario">
                <option value="">Elije una</option>
                @foreach($procesadores as $procesador)
                    <option value="{{$procesador->id}}">{{$procesador->nombre_procesador}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="codigo_pantalla_inventario">Pantalla:</label>
            <select name="codigo_pantalla_inventario">
                <option value="">Elije una</option>
                @foreach($pantallas as $pantalla)
                    <option value="{{$pantalla->id}}">{{$pantalla->nombre_pantalla}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="codigo_origen_inventario">Origen:</label>
            <select name="codigo_origen_inventario">
                <option value="">Elije una</option>
                @foreach($origenes as $origen)
                    <option value="{{$origen->id}}">{{$origen->nombre_origenes}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="codigo_proveedor_inventario">Proveedor:</label>
            <select name="codigo_proveedor_inventario">
                <option value="">Elije una</option>
                @foreach($proveedores as $proveedor)
                    <option value="{{$proveedor->id}}">{{$proveedor->nombre_proveedor}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="codigo_estado_inventario">Estado:</label>
            <select name="codigo_estado_inventario">
                <option value="">Elije una</option>
                @foreach($estados as $estado)
                    <option value="{{$estado->id}}">{{$estado->nombre_estado}}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="fecha_entrada_inventario">Fecha :</label>
            <input type="date" name="fecha_entrada_inventario" class="form-control" id="fecha_entrada_inventario">
        </div>

        <div class="form-group">
            <label for="observaciones_inventario">Observaciones:</label>
            <input type="text" name="observaciones_inventario" class="form-control" id="observaciones_inventario">
        </div>

        <div class="form-group">
            <label for="garantia_inventario">Garantia:</label>
            <input type="number" name="garantia_inventario" class="form-control" id="garantia_inventario">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


@endsection