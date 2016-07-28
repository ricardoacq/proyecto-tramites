@extends('mostrarperfil')
@section('info') 

<table class="table table-hover">
					<thead>
						<tr>
							<th>Id</th>
							<th>tramite</th>
							<th>Curp</th>
							<th>Num. de tramite</th>
							<th>Estado de solicitud</th>
						</tr>
					</thead>
					<tbody>
						@foreach($tramites as $t)
							<tr>
								<td>{{$t->id}}</td>
								<td>{{$t->tramite}}</td>
								<td>{{$t->curp}}</td>
								<td>{{$t->id_tramite}}</td>
								<td>{{$t->estado}}</td>
								<td><a href="" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Aceptar</a>
									<a href="" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Rechazar</a>

								</td>
							</tr>
						@endforeach
					</tbody>
				</table>



@stop