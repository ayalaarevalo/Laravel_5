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
										<th>Tipo Doc.</th>
										<th>Numeración</th>										
										<th>Fecha Documento</th>
										<th>Asunto</th>
										<th>Enviado</th>
										<th>Created_at</th>
										<th>Updated_at</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> {{ $documento->tipo_documento->descripcion }} </td>
										<td> {{ $documento->numeracion }} </td>
										<td> {{ $documento->fecha_documento}} </td>
										<td> {{ $documento->asunto}} </td>
										<td> {{ $documento->departamento->descripcion }} </td>
										<td> {{ $documento->created_at }} </td>
										<td> {{ $documento->updated_at }} </td>
									</tr>
								</tbody>
							</table>

							
						</div>
					<div class="panel-footer"><a href="{{action('DocumentosController@index')}}"  class="btn btn-warning" >Regresar</a>
</div>
				</div>
		</div>
		
	@stop

@endif