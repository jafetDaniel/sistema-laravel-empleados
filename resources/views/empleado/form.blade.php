    <h1>{{$modo}} empleado</h1>

    <div class="form-group">
        <label>Nombre</label>
        <input type="name" name="nombre" value="{{isset($empleado->nombre)? $empleado->nombre:"" }}" class="form-control">
    </div>

    <div class="form-group">
    <label>Apellido Paterno</label>
    <input type="text" name="apellidoPaterno" value="{{isset($empleado->apellidoPaterno)? $empleado->apellidoPaterno:"" }}" class="form-control">
    </div>

    <div class="form-group">
    <label>Apellido Materno</label>
    <input type="text" name="apellidoMaterno" value="{{isset($empleado->apellidoMaterno)? $empleado->apellidoPaterno:""}}" class="form-control">
    </div>

    <div class="form-group">
    <label>Correo</label>
    <input type="email" name="correo" value="{{isset($empleado->correo)? $empleado->correo:""}}" class="form-control">
    </div>

    <div class="form-group">
    @if(isset($empleado->foto))
    <img src="{{asset('storage').'/'.$empleado->foto}}" width="100px" class="img-thumbnail img-fluid">
    @endif
    <input type="file" name="foto" class="form-control">
    <br>
    <div class="form-group">

    <input type="submit" value="{{$modo}} datos" class="btn btn-success">
    <a href="{{url('empleado')}}" class="btn btn-primary">Regresar</a>