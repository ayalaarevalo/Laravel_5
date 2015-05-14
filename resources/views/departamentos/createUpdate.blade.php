
@extends('app')

@if (Auth::guest())

@else
	@section('content')
			<div class="col-md-10 col-md-offset-1">
				
				@if (isset($departamento))
					<div class="panel panel-success">
						<div class="panel-heading">Editar Departamento  </div>
							{!! Form::model($departamento, ['method' => 'PATCH', 'action' => ['DepartamentosController@update', $departamento->id]]) !!}
							
								<div class="panel-body">
									
									@include ('departamentos.form')

								</div>

								<div class="panel-footer">
									
									@include ('departamentos.button', ['submitButton' => 'Editar'])

								</div>
					
				@else
					<div class="panel panel-info">
						<div class="panel-heading">Crear nuevo Departamento  </div>
							{!! Form::open(['route' => 'departamentos.store']) !!}
								
								<div class="panel-body">

									@include ('departamentos.form')

								</div>

								<div class="panel-footer">
									
									@include ('departamentos.button',  ['submitButton' => 'Grabar'])

								</div>
					
				@endif
					</div>

							{!! Form::close() !!}

				
				@include ('errors.list')
					
				
			</div>	

	@stop
@endif