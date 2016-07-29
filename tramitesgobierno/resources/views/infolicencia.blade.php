@extends('layouts.app')
@section('encabezado')
<h1>Tramites de Licencia</h1>
@stop
@section('content')
	<div class="form-group">
		<label for="">Acta de nacimiento</label><br>
		<a href="{{url('licencias')}}/{{'acta'.$tramite->curp.'.jpg'}}">  Detalles</a>
		<hr>
		<label for"">Comprobante de Domicilio</label><br>
		<a href="{{url('licencias')}}/{{'Domicilio'.$tramite->curp.'.jpg'}}">  Detalles</a>
		<hr>
		<label for"">INE</label><br>
		<a href="{{url('licencias')}}/{{'INE'.$tramite->curp.'.jpg'}}">  Detalles</a>
		<hr>
		<label for="">Licencia Anterior o constancia de no infraccion.</label><br>
		<a href="{{url('licencias')}}/{{'Licencia'.$tramite->curp.'.jpg'}}">  Detalles</a>
		<hr>
		<div class="form-group">
		
		
						<form action="{{url('aprobar')}}/{{$id}}" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<input type="submit" class="btn btn-success" value="Aprobar">
						</form>
					
						<form action="{{url('rechazar')}}/{{$id}}" method="POST">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<input type="submit" class="btn btn-danger" value= "Rechazar">
						</form>
				
	</div>
	</div>


@stop