@extends('layouts.app')
@section('encabezado')
<h1>Acta de Nacimiento</h1>
@stop
@section('content')

	<div class="form-group">
		<h4>CURP del solicitante</h4>
		<label for="">{{$tramite->curp}}</label>
	</div>
	<hr>
	<div class="form-group">		
		<h4>Nombre del solicitante</h4>
		<label for="">{{$tramite->nombre}}  {{$tramite->apellidop}} {{$tramite->apellidom}}</label>
		
	</div>
	<hr>
	<div class="form-group">
		<h4>Fecha de nacimiento: </h4>
		<label for"">{{$tramite->fechanacimiento}}</label>
		
	</div>
	<hr>
	<div class="form-group">
		<h4>Lugar para recoger el documento: </h4>
		<label for"">{{$tramite->lugar}}</label>
  			
		
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