<?php namespace App\Http\Controllers;

use App\TipoDocumento;
use App\Http\Requests;
use App\Http\Requests\TipoDocumentoRequest;
use App\Http\Controllers\Controller;





class TipoDocumentosController extends Controller {

	
	public function __construct()
	{

		$this->middleware('auth', ['except' => 'index']);

	}
	
	public function index()
	{

		$tipo_documentos = TipoDocumento::paginate(5);
		///$tipo_documentos = TipoDocumento::all();




		//Ordena de manera asc por created_at
		//$tipo_documentos = TipoDocumento::latest()->get();
		//Ordena de manera desc por created_at
		//$tipo_documentos = TipoDocumento::oldest()->get();

		//Seleciona todos los registros
		//$tipo_documentos = TipoDocumento::all();

		//return View('tipo_documentos.index')->with('tipo_documentos',$tipo_documentos);

		


		return View('tipo_documentos.index',compact('tipo_documentos'));
	}

	public function show(TipoDocumento $tipo_documento)
	{
		
		if(is_null($tipo_documento)){

		}
		return View('tipo_documentos.show',compact('tipo_documento'));
	}

	public function create()
	{

		return View('tipo_documentos.createUpdate');

	}

	public function store(TipoDocumentoRequest $request)
	{
		//Muestra todos los elementos que le envia el formulario
		//$input = Request::all();
		//Muestra solo el elemento de la tabla que quiero
		//$input = Request::get('nombre_campo_tabla');
		//$input['estado'] = 'A';
		//$input['delete_at'] = '0000-00-00 00:00:00';
		//TipoDocumento::create($input);
		
		//TipoDocumento::create(Request::all());

		TipoDocumento::create($request->all());


		return redirect('tipo_documentos')->with('message', 'Registro agregado con exito');
	}

	public function edit(TipoDocumento $tipo_documento)
	{

		if(is_null($tipo_documento)){

		}

		return View('tipo_documentos.createUpdate', compact('tipo_documento'));

	}

	public function update(TipoDocumento $tipo_documento, TipoDocumentoRequest $request)
	{

		$tipo_documento->update($request->all());
 
		return redirect('tipo_documentos')->with('message', 'Registro actualizado con exito');

	}

	public function destroy(TipoDocumento $tipo_documento)
	{

		//borra de manera fisica
		//TipoDocumento::destroy($id);

		//borra de manera logica
		//$tipo_documento = TipoDocumento::find($id);

		$tipo_documento->delete();

		return redirect('tipo_documentos')->with('message', 'Registro eliminado con exito');

	}

}
