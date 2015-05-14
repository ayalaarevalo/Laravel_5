
@extends('app')

@if (Auth::guest())

@else

	@section('content')

			<div class="col-md-12 col-xs-12">
				<div class="panel panel-info">
					<div class="panel-heading">Documentos  </div>

					<div class="panel-body">
						
						
						@if (Session::has('message'))
						    <div class="alert alert-success">{{ Session::get('message') }}</div>
						@endif

						@include ('documentos.search')
						<p>
							<a href="{{action('DocumentosController@create')}}" class="btn btn-info" role="button">Crear nuevo</a>
						</p>

						<p> <strong> Total de Registros </strong> {!! $documentos->total() !!}</p>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Tipo Doc.</th>
									<th>Numeracion</th>
									<th>Fecha Documento</th>
									<th>Asunto</th>
									<th>Escaneo</th>
									<th>Enviado</th>
									<th colspan="3">Acción</th>
								</tr>
							</thead>
							<tbody>
							
								@foreach ($documentos as $documento)
									<tr>
										<td> {{ $documento->tipo_documento->descripcion }} </td>
										<td> {{ $documento->numeracion }} </td> 
										<td> {{ $documento->fecha_documento }} </td> 
										<td> {{ $documento->asunto }} </td> 
										<td> @if(!empty($documento->archivo)) 
												<a href="{{url('storage/' . $documento->archivo)}}" target="_blank">Documento</a> 
											 @endif 
										</td>
										<td> {{ $documento->departamento->descripcion }} </td>
										<td>  <a href="{{url('/documentos', $documento->id)}}" class="btn btn-default">Ver Registro</a></td>
										<td> {!! Html::link(route('documentos.edit', $documento->id), 'Edit ', array('class' => 'btn btn-success', 'type' => 'button')) !!} </td>
										<td>
											{!! Form::open(array('route' => array('documentos.destroy', $documento->id), 'method' => 'DELETE')) !!}
					                        	<button type="submit" class="btn btn-danger btn-md">Delete</button>
					                      	{!! Form::close() !!}
										</td>

									</tr>
								@endforeach

							</tbody>
						</table>						
					</div>
					@if ($documentos->render())
						<div class="panel-footer" align="right"> <p> <strong> Mostrando </strong> {!! $documentos->perPage() !!}  <strong> Registros de </strong> {!! $documentos->total() !!}</p> {!! $documentos->render() !!} </div>
					@endif
				</div>
			</div>	
		
	@stop
	
@endif