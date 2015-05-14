<div class="container-fluid">
	<div class="row">
		<div class="col-xs-6">
			<div class="control-group">
				<div class="control">
					{!! Form::label('descripcion', 'Tipo Documento:') !!}
					{!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Escriba el Tipo de Documento', 'maxlength' => '50', 'tabindex' => '1', 'autofocus' => 'autofocus', 'style' => 'text-transform:uppercase', 'onKeyUp' => 'javascript:this.value=this.value.toUpperCase()']) !!}
				</div>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="control-group">
				<div class="control">
					{!! Form::label('observacion', 'Observación:') !!}
					{!! Form::text('observacion', null, ['class' => 'form-control', 'placeholder' => 'Escriba una observación', 'maxlength' => '100', 'tabindex' => '2', 'style' => 'text-transform:uppercase', 'onKeyUp' => 'javascript:this.value=this.value.toUpperCase()']) !!}
				</div>
			</div>
		</div>
	</div>
	
</div>