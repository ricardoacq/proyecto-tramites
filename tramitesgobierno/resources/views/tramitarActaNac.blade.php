@extends('master')
@section('encabezado')
<h1>Acta de nacimiento</h1>
@stop

@section('contenido')
<form action="#" method="POST">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="">Nombre:</label>
		<input type="text" class="form-control" name="nombre">
	</div>
	<div class="form-group">
		<label for="">Fecha de nacimiento:</label><br>
		<label for"">Día</label>
		<input type="text" name="dia" value="">
		<label for"">Mes</label>
		<input type="text" name="mes" value="">
		<label for="">Año</label>
		<input type="text" name="año" value="">
	</div>
	<div class="form-group">
		
	</div>
	<input type="submit" class="btn btn-primary">
	<a href="#" class="btn btn-danger">Cancelar</a>
</form>

@stop