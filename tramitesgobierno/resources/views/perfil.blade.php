@extends('master')
@section('encabezado')
<h1>Perfil de Usuario</h1>
@stop

@section('contenido')


<form action="" method="POST">


		<label for="">Nombre:</label>
		<input type="text" class="form-control" name="nombre" maxlength="18" value="">

			<label for="">Correo:</label>
		<input type="text" class="form-control" name="correo" maxlength="18" value="" >

			<label for="">Calle:</label>
		<input type="text" class="form-control" name="calle" maxlength="18" value="">

			<label for="">Numero:</label>
		<input type="text" class="form-control" name="numero" maxlength="18" value="">

			<label for="">Colonia:</label>
		<input type="text" class="form-control" name="colonia" maxlength="18" value="">

			<label for="">Codigo Postal:</label>
		<input type="text" class="form-control" name="cp" maxlength="18" value="">
		<br>

		
<input type="submit" class="btn btn-primary" value="Guardar Cambios">

</form>





@stop