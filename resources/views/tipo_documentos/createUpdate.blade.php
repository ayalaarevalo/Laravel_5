
@extends('app')

@if (Auth::guest())

@else
	@section('content')
			<div class="col-md-10 col-md-offset-1">
				
				
						@if (isset($tipo_documento))
							<div class="panel panel-success">
								<div class="panel-heading">Editar Tipo Documentos  </div>
									{!! Form::model($tipo_documento, ['method' => 'PATCH', 'action' => ['TipoDocumentosController@update', $tipo_documento->id]]) !!}
									
										<div class="panel-body">
											
											@include ('tipo_documentos.form')

										</div>

										<div class="panel-footer">
											
											@include ('tipo_documentos.button', ['submitButton' => 'Editar'])

										</div>
							
						@else
							<div class="panel panel-info">
								<div class="panel-heading">Crear nuevo Tipo de Documento  </div>
									{!! Form::open(['route' => 'tipo_documentos.store']) !!}
										
										<div class="panel-body">

											@include ('tipo_documentos.form')

										</div>

										<div class="panel-footer">
											
											@include ('tipo_documentos.button',  ['submitButton' => 'Grabar'])

										</div>
							
						@endif
							</div>

									{!! Form::close() !!}

						
						@include ('errors.list')
					
				
			</div>	

	@stop
@endif