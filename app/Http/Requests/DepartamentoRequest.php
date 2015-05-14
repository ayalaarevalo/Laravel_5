<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class DepartamentoRequest extends Request {

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

			'descripcion' => 'required|min:8',
			'observacion' => 'required'
			
		];
	}

	public function messages()
	{
	    return [
	        'descripcion.required' => 'El campo Departamento es requerido!',
	        'descripcion.min' => 'El campo Departamento no puede tener menos de 5 carácteres',
			'descripcion.min' => 'El campo Departamento no puede tener más de 50 carácteres',
			'observacion.required' => 'El campo Director es requerido!',
	        'observacion.min' => 'El campo Director no puede tener menos de 5 carácteres',
			'observacion.min' => 'El campo Director no puede tener más de 100 carácteres',
	    ];
	}
}
