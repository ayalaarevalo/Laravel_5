
@extends('app')

@if (Auth::guest())

@else
	@section('content')
			<div class="col-md-10 col-md-offset-1">			
				
				@if(isset($documento))
					<div class="panel panel-success">
						<div class="panel-heading">Editar Documento  </div>
							{!! Form::model($documento, ['method' => 'PATCH', 'action' => ['DocumentosController@update', $documento->id], 'enctype' => 'multipart/form-data']) !!}
							
								<div class="panel-body">
									
									@include ('documentos.form')

								</div>

								<div class="panel-footer">
									
									@include ('documentos.button', ['submitButton' => 'Editar'])

								</div>
				@else
					<div class="panel panel-info">
						<div class="panel-heading">Crear Documento  </div>						
						{!! Form::open(['route' => 'documentos.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
								
							<div class="panel-body">

								@include ('documentos.form')

							</div>

							<div class="panel-footer">
								
								@include ('documentos.button',  ['submitButton' => 'Grabar'])

							</div>
					
				@endif
					</div>

						{!! Form::close() !!}

						
						
					
				
			</div>	

	@stop
@endif