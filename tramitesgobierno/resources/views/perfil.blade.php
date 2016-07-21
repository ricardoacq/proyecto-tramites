@extends('master')
@section('encabezado')
<h1>Perfil de Usuario</h1>
@stop

@section('contenido')

<form action="{{url('actualizarusuario')}}/{{$usuario->id}}" method="POST" class="col-xs-8">
	<input type="hidden" name="_token" value="{{csrf_token()}}">


		
		<label for="">Nombre(s):</label>
		<input type="text" class="form-control" name="nombre" maxlength="18" value="{{$usuario->nombre}}">

			<label for="">Apellido Paterno:</label>
		<input type="text" class="form-control" name="apellidoP" maxlength="18" value="{{$usuario->apellidop}}" >

			<label for="">Apellido Materno:</label>
		<input type="text" class="form-control" name="apellidoM" maxlength="18" value="{{$usuario->apellidom}}">

			<label for="">Calle:</label>
		<input type="text" class="form-control" name="calle" maxlength="18" value="{{$usuario->calle}}">
		
			<label for="">Número de casa:</label>
		<input type="text" class="form-control" name="ncasa" maxlength="18" value="{{$usuario->numerocasa}}">
		
			<label for="">Colonia:</label>
		<input type="text" class="form-control" name="colonia" maxlength="18" value="{{$usuario->colonia}}">

			<label for="">Código Postal:</label>
		<input type="text" class="form-control" name="cp" maxlength="18" value="{{$usuario->cp}}">
		<br>

		
<input type="submit" class="btn btn-primary" value="Guardar Cambios">

</form>





@stop
