@extends('app')

@if (Auth::guest())

@else

	@section('content')
		<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Informacion del Registro </div>
						<div class="panel-body">
							<table class="table table-hover">
								<thead>
									<tr>
										<th>Tipo Documento</th>
										<th>Observación</th>										
										<th>Created_at</th>
										<th>Updated_at</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> {{ $tipo_documento->descripcion }} </td> 
										<td> {{ $tipo_documento->observacion}} </td>										
										<td> {{ $tipo_documento->created_at }} </td>
										<td> {{ $tipo_documento->updated_at }} </td>
									</tr>
								</tbody>
							</table>

							
						</div>
					<div class="panel-footer"><a href="{{action('TipoDocumentosController@index')}}"  class="btn btn-warning" >Regresar</a>
</div>
				</div>
		</div>
		
	@stop

@endif