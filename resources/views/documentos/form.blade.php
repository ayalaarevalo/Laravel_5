<div class="tabbable">
	<ul class="nav nav-tabs" role="tablist" id="myTab">
		<li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Datos del documento</a></li>
		<li><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" tabindex="9">Datos de la Persona</a></li>
	</ul>
	<script>
	  $(function () {
	    $('#myTab a:first').tab('show')
	  })
	</script>
	<div class="tab-content">
		<div id="home" class="tab-pane active">
			<div class="container-fluid">
				<div class="row-fluid">		
					<div class="col-xs-4">
						<div class="form-group @if ($errors->has('tipo_documento_id')) has-error @endif">
							{!! Form::label('tipo_documento_id', 'Tipo Documento') !!}
							{!! Form::select('tipo_documento_id', array('' => 'Select' ) + $tipo_documentos,  null, ['class' => 'form-control', 'tabindex' => '1']) !!}	
							@if ($errors->has('tipo_documento_id')) <p class="help-block">{{ $errors->first('tipo_documento_id') }}</p> @endif
						</div>
					</div>
					<div class="col-xs-4">
						<div class="form-group @if ($errors->has('numeracion')) has-error @endif">
							{!! Form::label('numeracion', 'Numeración') !!}				
							{!! Form::text('numeracion', null, ['class' => 'form-control', 'placeholder' => 'GADMM', 'maxlength' => '50', 'tabindex' => '2', 'autofocus' => 'autofocus', 'style' => 'text-transform:uppercase', 'onKeyUp' => 'javascript:this.value=this.value.toUpperCase()']) !!}
							@if ($errors->has('numeracion')) <p class="help-block">{{ $errors->first('numeracion') }}</p> @endif
						</div>
					</div>
					<div class="col-xs-4">
						<div class="form-group @if ($errors->has('fecha_documento')) has-error @endif">
							{!! Form::label('fecha_documento', 'Fecha Documento') !!}
							{!! Form::input('date', 'fecha_documento', Carbon\Carbon::now()->format('Y-m-d'), ['class' => 'form-control', 'tabindex' => '3']) !!}
							@if ($errors->has('fecha_documento')) <p class="help-block">{{ $errors->first('fecha_documento') }}</p> @endif
						</div>
					</div>
				</div>
				<div class="row-fluid">
					<div class="form-group @if ($errors->has('asunto')) has-error @endif">
						{!! Form::label('asunto', 'Asunto') !!}
						{!! Form::textarea('asunto', null, ['class' => 'form-control', 'tabindex' => '4', 'style' => 'text-transform:uppercase', 'onKeyUp' => 'javascript:this.value=this.value.toUpperCase()']) !!}
						@if ($errors->has('asunto')) <p class="help-block">{{ $errors->first('asunto') }}</p> @endif
					</div>
				</div>
				<div class="row-fluid">
					<div class="col-xs-6">
						<div class="form-group @if ($errors->has('departamento_id')) has-error @endif">
							{!! Form::label('departamento', 'Departamento:') !!}
							{!! Form::select('departamento_id', array('' => 'Select' ) + $departamentos,  null, ['class' => 'form-control', 'id' => 'departamento_id']) !!}
							@if ($errors->has('departamento_id')) <p class="help-block">{{ $errors->first('departamento_id') }}</p> @endif
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group @if ($errors->has('archivo')) has-error @endif">
							{!! Form::label('archivo', 'Adjunte el documento:') !!}
							{!! Form::file('archivo', ['class' => 'form-control', 'accept' => 'application/pdf', 'id' =>'archivo']) !!}
							@if ($errors->has('archivo')) <p class="help-block">{{ $errors->first('archivo') }}</p> @endif
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="profile" class="tab-pane">
			<div class="container-fluid">
				<div class="row-fluid">
					<div class="col-xs-6">
						<div class="form-group">
				    		{!! Form::label('apellido_paterno' , 'Apellido Paterno') !!}							
							{!! Form::text('apellido_paterno', null, ['class' => 'form-control', 'placeholder' => 'Apellido Paterno', 'maxlength' => '50', 'tabindex' => '10', 'autofocus' => 'autofocus', 'style' => 'text-transform:uppercase', 'onKeyUp' => 'javascript:this.value=this.value.toUpperCase()']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('primer_nombre' , 'Primer Nombre') !!}							
							{!! Form::text('primer_nombre', null, ['class' => 'form-control', 'placeholder' => 'Primer Nombre', 'maxlength' => '50', 'tabindex' => '12', 'autofocus' => 'autofocus', 'style' => 'text-transform:uppercase', 'onKeyUp' => 'javascript:this.value=this.value.toUpperCase()']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('cidentidad' , 'Cédula') !!}
							<input type="text" class="form-control" name="cidentidad" id="cidentidad" tabindex="14" maxlength="10" onblur="validarDocumento()" onkeypress="return pulsar(event)">
						</div>
					</div>
					<div class="col-xs-6">
						<div class="form-group">
							{!! Form::label('apellido_materno' , 'Apellido Materno') !!}							
							{!! Form::text('apellido_materno', null, ['class' => 'form-control', 'placeholder' => 'Apellido Materno', 'maxlength' => '50', 'tabindex' => '11', 'autofocus' => 'autofocus', 'style' => 'text-transform:uppercase', 'onKeyUp' => 'javascript:this.value=this.value.toUpperCase()']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('segundo_nombre' , 'Segundo Nombre') !!}							
							{!! Form::text('segundo_nombre', null, ['class' => 'form-control', 'placeholder' => 'Segundo Nombre', 'maxlength' => '50', 'tabindex' => '13', 'autofocus' => 'autofocus', 'style' => 'text-transform:uppercase', 'onKeyUp' => 'javascript:this.value=this.value.toUpperCase()']) !!}
						</div>
						<div class="form-group">
							{!! Form::label('celular' , 'Celular') !!}
							<input type="text" class="form-control" name="celular" id="celular" tabindex="15" maxlength="15" onkeypress="return pulsar(event)">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

				