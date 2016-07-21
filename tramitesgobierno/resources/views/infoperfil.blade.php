@extends('mostrarperfil')
@section('info') 
<form action="" method="POST" class="col-xs-8">
		
		<label for="">Nombre:</label>	<br>
		<span class="label label-success" value="">{{$usuario->nombre}}</span><br>
		

			<label for="">Correo:</label><br>
		<span class="label label-success" value="">{{$usuario->correo}}</span><br>

			<label for="">Calle:</label><br>
		<span class="label label-success" value="">{{$usuario->calle}}</span><br>

			<label for="">Numero:</label><br>
		<span class="label label-success" value="">{{$usuario->numerocasa}}</span><br>

			<label for="">Colonia:</label><br>
		<span class="label label-success" value="">{{$usuario->colonia}}</span><br>

			<label for="">Codigo Postal:</label><br>
		<span class="label label-success" value="">{{$usuario->cp}}</span><br>
		<br>
	</form>
@stop