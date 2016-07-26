@extends('mostrarperfil')
@section('info') 
<form action="" method="POST" class="col-xs-8">
		
		<label for="">Nombre:</label><br>
		<span class="label label-success" value="">{{ Auth::user()->name }} {{ Auth::user()->apellidop }} {{ Auth::user()->apellidom }}</span><br>
		
		<label for="">Correo:</label><br>
		<span class="label label-success" value="">{{ Auth::user()->email }}</span><br>

		<label for="">Curp:</label><br>
		<span class="label label-success" value="">{{ Auth::user()->curp }}</span><br>
		<br>
	</form>
@stop