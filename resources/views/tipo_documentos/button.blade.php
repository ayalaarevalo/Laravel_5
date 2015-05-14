<a href="{{action('TipoDocumentosController@index')}}" class="btn btn-warning" >Canelar</a>
{!! Form::reset('Clear form', ['class' => 'btn btn-default']) !!}
{!! Form::submit($submitButton, ['class' => 'btn btn-primary']) !!}