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
	<hr>
	<div class="form-group">
		<h4>Fecha de nacimiento</h4>
		<label for"">Día</label>
		<input type="text" class="form-control" name="dia" value="">
		<label for"">Mes</label>
		<input type="text" class="form-control" name="mes" value="">
		<label for="">Año</label>
		<input type="text" class="form-control" name="año" value="">
	</div>
	<hr>
	<div class="form-group">
		<h4>Lugar para recoger el documento</h4>
		<div class="radio">
  			<label>
    			<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
   				 Unidad de Servicios Estatales
  			</label>
		</div>
		<div class="radio">
		 	<label>
		    	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
		    	Ayuntamiento
			</label>
		</div>

	</div>
	<hr>
	<div class="col-xs-12 text-center well">
		<input type="submit" class="btn btn-primary">
		<a href="#" class="btn btn-danger">Cancelar</a>
	</div>
</form>

@stop