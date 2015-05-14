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
										<th>Departamento</th>
										<th>Jefe/Director</th>
										<th>Created_at</th>
										<th>Updated_at</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> {{ $departamento->descripcion }} </td> 
										<td> {{ $departamento->observacion}} </td>
										<td> {{ $departamento->created_at }} </td>
										<td> {{ $departamento->updated_at }} </td>
									</tr>
								</tbody>
							</table>

							
						</div>
					<div class="panel-footer"><a href="{{action('DepartamentosController@index')}}"  class="btn btn-warning" >Regresar</a>
</div>
				</div>
		</div>
		
	@stop

@endif