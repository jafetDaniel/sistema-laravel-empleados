    <h1>{{$modo}} empleado</h1>

    @if(count($errors) > 0 )
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="form-group">
        <label>Nombre</label>
        <input type="name" name="nombre" value="{{isset($empleado->nombre)? $empleado->nombre:old('nombre') }}" class="form-control">
    </div>

    <div class="form-group">
    <label>Apellido Paterno</label>
    <input type="text" name="apellidoPaterno" value="{{isset($empleado->apellidoPaterno)? $empleado->apellidoPaterno:old('apellidoPaterno') }}" class="form-control">
    </div>

    <div class="form-group">
    <label>Apellido Materno</label>
    <input type="text" name="apellidoMaterno" value="{{isset($empleado->apellidoMaterno)? $empleado->apellidoMaterno:old('apellidoMaterno')}}" class="form-control">
    </div>

    <div class="form-group">
    <label>Correo</label>
    <input type="email" name="correo" value="{{isset($empleado->correo)? $empleado->correo:old('correo')}}" class="form-control">
    </div>

    <div class="form-group">
    <label>Foto</label>
    @if(isset($empleado->foto))
    <img src="{{asset('storage').'/'.$empleado->foto}}" width="100px" class="img-thumbnail img-fluid">
    @endif
    <input type="file" name="foto" class="form-control">
    <br>
    <div class="form-group">

    <input type="submit" value="{{$modo}} datos" class="btn btn-success">
    <a href="{{url('empleado')}}" class="btn btn-primary">Regresar</a>