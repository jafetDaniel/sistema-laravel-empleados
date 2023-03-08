    <label>Nombre</label>
    <input type="name" name="nombre" value="{{isset($empleado->nombre)? $empleado->nombre:"" }}">
    <br>
    <label>Apellido Paterno</label>
    <input type="text" name="apellidoPaterno" value="{{isset($empleado->apellidoPaterno)? $empleado->apellidoPaterno:"" }}">
    <br>
    <label>Apellido Materno</label>
    <input type="text" name="apellidoMaterno" value="{{isset($empleado->apellidoMaterno)? $empleado->apellidoPaterno:""}}">
    <br>
    <label>Correo</label>
    <input type="email" name="correo" value="{{isset($empleado->correo)? $empleado->correo:""}}">
    <br>

    <label>Foto</label>
    @if(isset($empleado->foto))
    <img src="{{asset('storage').'/'.$empleado->foto}}" width="100px">
    @endif
    <input type="file" name="foto" value="">
    <br>
    <input type="submit" value="guardar datos">
    <br>
    <a href="{{url('empleado')}}">Regresar</a>