@extends('layouts.app')
@section('encabezado')
<h1>Solicitud de becas</h1>
@stop

@section('content')

<form action="{{url('/guardarBeca')}}/{{ Auth::user()->curp }}" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="">Beca</label>		
		<select class ="form-control" name="beca">
			<option value="manutencion">Beca de manutencion</option>
			<option value="transporte">Beca de transporte</option>
			<option value="servicio">Beca de servicio social</option>
			<option value="extrangero">Beca de estudios en el extrangero</option>
			<option value="T___T">Beca de no tengo dinero T__T</option>
		</select>	
		<hr>
		<label for="">Acta de nacimiento</label>
		<input name="acta" type="file" class="form-control">
		<hr>
		<label for"">Comprobante de Domicilio</label>
		<input name="comprobanteD" type="file" class="form-control">
		<hr>
		<label for"">Fotografía</label>
		<input name="foto" type="file" class="form-control">
		<hr>
		<label for="">Constancia de estudios</label>
		<input name="constancia" type="file" class="form-control">
		<hr>
		<label for="">Comprobante de ingresos</label>
		<input name="comprobanteI" type="file" class="form-control">
	</div>
	<div class="col-xs-12 well">
		<label>*Los archivos deben de ser subidos con imagen clara para su correcta verificacion.</label>
	</div>
	<div class="text-center">
		<input type="submit" class="btn btn-primary">
		<a href="{{url('/principal')}}" class="btn btn-danger">Cancelar</a>
	</div>
	
</form>

@stop