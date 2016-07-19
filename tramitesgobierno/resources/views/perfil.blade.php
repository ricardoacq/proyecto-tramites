@extends('master')
@section('encabezado')
<h1>Perfil de Usuario</h1>
@stop

@section('contenido')


<form action="{{url('actualizarusuario')}}/{{$usuario->id}}" method="POST">
	<input type="hidden" name="_token" value="{{csrf_token()}}">

		
		<label for="">Nombre(s):</label>
		<input type="text" class="form-control" name="nombre" maxlength="18" value="{{$usuario->nombre}}">

			<label for="">Apellido Paterno:</label>
		<input type="text" class="form-control" name="apellidoP" maxlength="18" value="{{$usuario->apellidop}}" >

			<label for="">Apellido Materno:</label>
		<input type="text" class="form-control" name="apellidoM" maxlength="18" value="{{$usuario->apellidom}}">

			<label for="">Sexo (M/F):</label>
		<input type="text" class="form-control" name="sexo" maxlength="18" value="{{$usuario->sexo}}">

			<label for="">Localidad:</label>
		<input type="text" class="form-control" name="estado" maxlength="18" value="{{$usuario->estado}}">
		<br>

		
<input type="submit" class="btn btn-primary" value="Guardar Cambios">

</form>





@stop