{!! Form::model(Request::all(),['route' => 'departamentos.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
	
	{!! Form::text('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Dirección']) !!}
	{!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}