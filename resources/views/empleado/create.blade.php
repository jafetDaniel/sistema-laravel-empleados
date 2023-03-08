<h1>Creacion de empleado</h1>

<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('empleado.form')
</form>