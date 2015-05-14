
@extends('master')

@section('content')
	<h1>Editar Departamento</h1>
	<div class="container-fluid">
		{!! Form::open(['url' => 'departamentos']) !!}
			<div class="row">
				<div class="col-xs-6">
					<div class="control-group">
						<div class="control">
							{!! Form::label('descripcion', 'Departamento:') !!}
							{!! Form::text('descripcion', $departamento->descripcion, ['class' => 'form-control', 'placeholder' => 'Escriba la Dirección', 'maxlength' => '50', 'tabindex' => '1', 'autofocus' => 'autofocus']) !!}
						</div>
					</div>
				</div>
				<div class="col-xs-6">
					<div class="control-group">
						<div class="control">
							{!! Form::label('observacion', 'Director:') !!}
							{!! Form::text('observacion', null, ['class' => 'form-control', 'placeholder' => 'Escriba el Nombre del Director', 'maxlength' => '100', 'tabindex' => '2']) !!}
						</div>
					</div>
				</div>
			</div>
			{!! Form::hidden('estado', 'A', array('id' => 'estado')) !!}
			{!! Form::hidden('delete_at', '0000-00-00 00:00:00', array('id' => 'delete_at')) !!}
			<hr>
			<a href="{{action('DepartamentosController@index')}}">Canelar</a>
			{!! Form::submit('Grabar', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}


		@if ($errors->any())

			<ul class="alert alert-danger">

				@foreach ($errors->all() as $error)
					<li> {{ $error }} </li>
				@endforeach
			
			</ul>

		@endif

	</div>


@stop