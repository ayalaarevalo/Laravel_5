<div class="container-fluid">
	<div class="row">
		<div class="col-xs-6">
			<div class="control-group">
				<div class="control">
					{!! Form::label('descripcion', 'Departamento:') !!}
					
					{!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Escriba la Dirección', 'maxlength' => '50', 'tabindex' => '1', 'autofocus' => 'autofocus', 'style' => 'text-transform:uppercase', 'onKeyUp' => 'javascript:this.value=this.value.toUpperCase()']) !!}
				</div>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="control-group">
				<div class="control">
					{!! Form::label('observacion', 'Director:') !!}
					{!! Form::text('observacion', null, ['class' => 'form-control', 'placeholder' => 'Escriba el Nombre del Director', 'maxlength' => '100', 'tabindex' => '2', 'style' => 'text-transform:uppercase', 'onKeyUp' => 'javascript:this.value=this.value.toUpperCase()']) !!}
				</div>
			</div>
		</div>
	</div>
	
</div>