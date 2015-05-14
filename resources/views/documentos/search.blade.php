{!! Form::model(Request::all(),['route' => 'documentos.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
	
	{!! Form::text('asunto', null, ['class' => 'form-control', 'placeholder' => 'Asunto']) !!}
	{!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}
	<a href="{{action('DocumentosController@index')}}" class="btn btn-info" role="button">Ver Todos</a>
	

{!! Form::close() !!}