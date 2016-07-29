@extends('layouts.app')
@section('encabezado')
<h1>VISA</h1>
@stop
@section('content')

	<div class="form-group">
		<label for="">Solicitud de VISA</label><br>
		<a href="{{url('visas')}}/{{'Solicitud'.$tramite->curp.'.jpg'}}">  Detalles</a>
		<hr>

		<label for="">Pasaporte vigente</label><br>
		<a href="{{url('visas')}}/{{'Pasaporte'.$tramite->curp.'.jpg'}}">  Detalles</a>
		<hr>

		<label for="">Fotografia reciente (no mayor a 6 meses)</label><br>
		<a href="{{url('visas')}}/{{'Foto'.$tramite->curp.'.jpg'}}">  Detalles</a>
		<hr>

		<label for="">*Documento de estancia legal</label><br>
		<a href="{{url('visas')}}/{{'Estancia'.$tramite->curp.'.jpg'}}">  Detalles</a>
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