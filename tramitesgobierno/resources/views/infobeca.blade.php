@extends('layouts.app')
@section('encabezado')
<h1>Solicitud de becas</h1>
@stop

@section('content')
	<div class="form-group">
		<h4>Beca:</h4>
		<label for="">{{$tramite->beca}}</label>			
		<hr>
		<h4>Acta de nacimiento</h4>
		<a href="{{url('beca')}}/{{'acta'.$tramite->curp.'.jpg'}}">  Detalles</a>
		<hr>
		<h4>Comprobante de Domicilio</h4>
		<a href="{{url('beca')}}/{{'Domicilio'.$tramite->curp.'.jpg'}}">  Detalles</a>
		<hr>
		<h4>Fotografía</h4>
		<a href="{{url('beca')}}/{{'Foto'.$tramite->curp.'.jpg'}}">  Detalles</a>
		<hr>
		<h4>Constancia de estudios</h4>
		<a href="{{url('beca')}}/{{'Constancia'.$tramite->curp.'.jpg'}}">  Detalles</a>
		<hr>
		<h4>Comprobante de ingresos</h4>
		<a href="{{url('beca')}}/{{'Ingresos'.$tramite->curp.'.jpg'}}">  Detalles</a>
	</div>
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

	
	


@stop