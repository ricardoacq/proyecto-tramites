extends('mostrarperfil')
@section('info') 

<table class="table table-hover">
					<thead>
						<tr>
							<th>Curp</th>
							<th>Tipo</th>
							<th>Estado</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach($solicitudes as $s)
							<tr>
								<td>{{$s->id}}</td>
								<td>{{$s->nombre}}</td>
								<td>{{$s->telefono}}</td>
								<td><a href="{{url('eliminarCliente')}}/{{$c->id}}" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Aceptar</a>
									<a href="{{url('modificarCliente')}}/{{$c->id}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Rechazar</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>





@stop