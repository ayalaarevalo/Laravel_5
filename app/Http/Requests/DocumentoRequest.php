<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class DocumentoRequest extends Request {

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
			'tipo_documento_id' => 'required',
			'departamento_id' => 'required',
			'archivo' => 'mimes:pdf|max:50000',
			'asunto' => 'required'
		];
	}

	public function messages()
	{
	    return [
	        'tipo_documento.required' => 'El campo Tipo de documento es requerido!',
	        'archivo' => 'El archivo que esta intentando subir no tiene una extension valida',
			'departamento.required' => 'El campo Departamento es requerido!',	        
			
	    ];
	}
}
