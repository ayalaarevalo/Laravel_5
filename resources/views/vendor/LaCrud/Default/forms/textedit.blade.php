<div class="form-group {{ ( $errors->first($field['name']) == '' ) ? '' : 'has-error' }}">
	<label class="control-label" for="TextEditor{{ $field['name'] }}"> {{ $field['name_display'] }}
		@if($errors->first($field['name']))
	    	<span class="text-danger">
	    		<i class="fa fa-times-circle-o"></i> {{ $errors->first($field['name']) }}
	    	</span>
	    @endif
	</label>
	<textarea name="{{ $field['name'] }}" id="{{ md5($field['name']) }}" rows="10" cols="80">
		{{ (Input::old($field['name'])) ? Input::old($field['name']) : $field['value'] }}
	</textarea>
	<script>
		LaCrud.texteditors.push('{{ md5($field['name']) }}');
	</script>
</div>