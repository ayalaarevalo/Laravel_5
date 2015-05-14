
@extends('app')

@if (Auth::guest())

@else

	@section('content')

			<div class="col-md-12 col-xs-12">
				<div class="panel panel-info">
					<div class="panel-heading">Dirección  </div>

					<div class="panel-body">
						
						@if (Session::has('deleted'))
					     <div class="alert alert-warning" role="alert"> Contacto borrado, si desea deshacer el cambio <a href="{{ route('departamentos/restore', [Session::get('deleted')]) }}">Click aqui</a> </div>
 					   @endif
					 
					   @if (Session::has('restored'))
					     <div class="alert alert-success" role="alert"> Contacto restaurado</div>
					   @endif
						@if (Session::has('message'))
						    <div class="alert alert-success">{{ Session::get('message') }}</div>
						@endif

						@include ('departamentos.search')
						<p>
							<a href="{{action('DepartamentosController@create')}}" class="btn btn-info" role="button">Crear nuevo</a>
						</p>
						<p> <strong> Total de Registros </strong> {!! $departamentos->total() !!}</p>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Dirección</th>
									<th>Director</th>
									<th colspan="3">Acción</th>

								</tr>
							</thead>
							<tbody>
							
								@foreach ($departamentos as $departamento)
									<tr>
										<td> {{ $departamento->descripcion }} </td> 
										<td> {{ $departamento->observacion}} </td>
										<td>  <a href="{{url('/departamentos', $departamento->id)}}"><i class="glyphicon glyphicon-search"></i></a></td>
										<td>  <a href="{{ route('departamentos.edit', [$departamento->id]) }}"><i class="glyphicon glyphicon-edit icon-edit"></i></a> </td>
										<td>  <a href="{{ route('departamentos/delete', [$departamento->id]) }}"><i class="glyphicon glyphicon-trash icon-trash"></i></a></td>
									</tr>
								@endforeach

							</tbody>
						</table>						
					</div>
					@if ($departamentos->appends(Request::all())->render())
						<div class="panel-footer" align="right">  {!! $departamentos->render() !!} </div>
					@endif
				</div>
			</div>	
		
	@stop
@endif