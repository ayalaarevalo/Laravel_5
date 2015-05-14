
@extends('app')

@if (Auth::guest())

@else

	@section('content')

			<div class="col-md-12 col-xs-12">
				<div class="panel panel-info">
					<div class="panel-heading">Tipo de Documentos  </div>

					<div class="panel-body">
						
						
						@if (Session::has('message'))
						    <div class="alert alert-success">{{ Session::get('message') }}</div>
						@endif
						<div align="left">
							<a href="{{action('TipoDocumentosController@create')}}" class="btn btn-info" role="button">Crear nuevo</a>
						</div>
						<p> <strong> Total de Registros </strong> {!! $tipo_documentos->total() !!}</p>
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Tipo Documento</th>
									<th>Observación</th>
									<th colspan="3">Acción</th>

								</tr>
							</thead>
							<tbody>
							
								@foreach ($tipo_documentos as $tipo_documento)
									<tr>
										<td> {{ $tipo_documento->descripcion }} </td> 
										<td> {{ $tipo_documento->observacion}} </td>
										<td>  <a href="{{url('/tipo_documentos', $tipo_documento->id)}}"><i class="glyphicon glyphicon-search"></i></a></td>
										<td>  <a href="{{ route('tipo_documentos.edit', [$tipo_documento->id]) }}"><i class="glyphicon glyphicon-edit icon-edit"></i></a> </td>
										<td>  <a href="{{ route('tipo_documentos/delete', [$tipo_documento->id]) }}"><i class="glyphicon glyphicon-trash icon-trash"></i></a></td>
									</tr>
								@endforeach

							</tbody>
						</table>						
					</div>
					@if ($tipo_documentos->render())
						<div class="panel-footer" align="right">{!! $tipo_documentos->render() !!}</div>
					@endif
				</div>
			</div>	
		
	@stop
@endif