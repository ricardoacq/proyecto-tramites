@extends('layouts.app')
@section('encabezado')
<h1>Tramites de Licencia</h1>
@stop

@section('content')

<form action="{{url('/guardarLicencia')}}/{{ Auth::user()->curp }}" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="">Acta de nacimiento</label>
		<input name="acta" type="file" class="form-control">
		<hr>
		<label for"">Comprobante de Domicilio</label>
		<input name="comprobante" type="file" class="form-control">
		<hr>
		<label for"">INE</label>
		<input name="ine" type="file" class="form-control"/>
		<hr>
		<label for="">Licencia Anterior o constancia de no infraccion.</label>
		<input name="licencia" type="file" class="form-control">
	</div>
	<div class="col-xs-12 well">
		<label>*Los archivos deben de ser subidos con imagen clara y en formato .jpg para su correcta verificacion.</label>
	</div>
	<div class="text-center">
		<input type="submit" class="btn btn-primary">
		<a href="{{url('/principal')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>
@stop