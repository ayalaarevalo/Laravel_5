<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TipoDocumentoRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{

		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [

			'descripcion' => 'required|min:5',
			'observacion' => 'required|min:8'
			
		];
	}

	public function messages()
	{
	    return [
	        'descripcion.required' => 'El campo Tipo documento es requerido!',
	        'descripcion.min' => 'El campo Tipo documento no puede tener menos de 5 carácteres',			
			'observacion.required' => 'El campo Observación es requerido!',
	        'observacion.min' => 'El campo Observación no puede tener menos de 8 carácteres',
			
	    ];
	}
}
