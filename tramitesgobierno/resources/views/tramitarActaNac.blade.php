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
		<label for="">Fecha de nacimiento</label><br>
		<label for"">Día</label>
		<input type="text" name="dia" value="">
		<label for"">Mes</label>
		<input type="text" name="mes" value="">
		<label for="">Año</label>
		<input type="text" name="año" value="">
	</div>
	<div class="form-group">
		<label for="">Lugar para recoger el documento</label><br>
		<label for="">Unidad de Servicios Estatales</label>
		<input type="checkbox" name="seleccion" value="">
		<label for="">Ayuntamiento</label>
		<input type="checkbox" name="seleccion" value="">

	</div>
	<div class="form-group">
		<label>Elija una fecha para recoger su acta</label>
	</div>
	<input type="submit" class="btn btn-primary">
	<a href="#" class="btn btn-danger">Cancelar</a>
</form>

@stop