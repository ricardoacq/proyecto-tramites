@extends('mostrarperfil')
@section('info') 
<form action="" method="POST" class="col-xs-8">
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
	</form>
@stop