<div class="form-group {{ ( $errors->first($field['name']) == '' ) ? '' : 'has-error' }}">
	<label class="control-label" for="SimpleInput{{ $field['name'] }}"> {{ $field['name_display'] }}
		@if($errors->first($field['name']))
	    	<span class="text-danger">
	    		<i class="fa fa-times-circle-o"></i> {{ $errors->first($field['name']) }}
	    	</span>
	    @endif
	    </label>
    <input type="number" size="{{ is_null($field['length']) ? '' : $field['length'] }}" class="form-control" name="{{ $field['name'] }}" id="SimpleInput{{ $field['name'] }}" placeholder="{{ $field['name_display'] }}" value="{{ (Input::old($field['name'])) ? Input::old($field['name']) : $field['value'] }}">
</div>