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
								<td><a href="{{url('detalles')}}/{{$t->id}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>  Detalles</a>

								</td>
							</tr>
						@endforeach
					</tbody>
				</table>



@stop