<h1>Creacion de empleado</h1>

<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label>Nombre</label>
    <input type="name" name="nombre">
    <br>
    <label>Apellido Paterno</label>
    <input type="text" name="apellidoPaterno">
    <br>
    <label>Apellido Materno</label>
    <input type="text" name="apellidoMaterno">
    <br>
    <label>Correo</label>
    <input type="email" name="correo">
    <br>
    <label>Foto</label>
    <input type="file" name="foto">
    <br>
    <input type="submit" name="enviar">
</form>