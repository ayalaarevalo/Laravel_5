<?php namespace App\Http\Controllers;

use App\Documento;
use App\Departamento;
use App\TipoDocumento;
use App\Http\Requests;
use App\Http\Requests\DocumentoRequest; 
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;




class DocumentosController extends Controller {

	public function __construct()
	{

		$this->middleware('auth', ['except' => 'index']);

	}

	public function index(Request $request)
	{
		if(! \Auth::guest())
		{

			$user_id = \Auth::user()->id;

			$documentos = Documento::where('user_id', '=', $user_id)->asunto($request->get('asunto'))->paginate(10);

			return View('documentos.index',compact('documentos'));
		}
		else
		{
			return View('auth.login');
		}
		
	}

	public function create()
	{

		$departamentos = Departamento::all()->lists('descripcion', 'id');

		$tipo_documentos = TipoDocumento::all()->lists('descripcion', 'id');

		return View('documentos.createUpdate', compact('departamentos', 'tipo_documentos'));

	}
	public function store(DocumentoRequest $request)
	{

		$documento = new Documento($request->all());

		$file = $request->file('archivo');

		if(!is_null($file))
		{

			$nombre = $file->getClientOriginalName();

			$documento['archivo'] = $nombre;
			
			\Storage::disk('local')->put($nombre, \File::get($file));

		}

		\Auth::user()->documento()->save($documento);

		return redirect('documentos')->with('message', 'Registro agregado con exito');
	}

	/*public function show($id)
	{
		$documento = Documento::findOrFail($id);
		
		if(is_null($documento)){

		}
		return View('documentos.show',compact('documento'));
	}*/

	public function show(Documento $documento)
	{

		return View('documentos.show',compact('documento'));

	}

	/*public function edit($id)*/
	public function edit(Documento $documento)
	{

		

		$departamentos = Departamento::all()->lists('descripcion', 'id');

		$tipo_documentos = TipoDocumento::all()->lists('descripcion', 'id');
		
		if(is_null($documento)){

		}

		return View('documentos.createUpdate', compact('documento', 'departamentos', 'tipo_documentos'));

	}

	public function update(Documento $documento, DocumentoRequest $request)
	{
		
		$documento->tipo_documento_id = \Input::get('tipo_documento_id');
		$documento->numeracion = \Input::get('numeracion');
		$documento->fecha_documento = \Input::get('fecha_documento');
		$documento->asunto = \Input::get('asunto');
		$documento->departamento_id = \Input::get('departamento_id');

		$file = $request->file('archivo');
				
		if(!is_null($file))
		{

			if(!empty($documento['archivo']))
			{
				$exists = \Storage::disk('local')->exists($documento['archivo']);

				if ($exists) \Storage::delete($documento['archivo']);
			}
			
			$nombre = $file->getClientOriginalName();

			$documento['archivo'] =  $nombre;

			\Storage::disk('local')->put($nombre, \File::get($file));
			
		}
		
		$documento->save($request->all());
 
		return redirect('documentos')->with('message', 'Registro actualizado con exito');

	}

	public function destroy($id)
	{

		$departamento = Departamento::find($id);

		$departamento->delete();

		return redirect('departamentos')->with('message', 'Registro eliminado con exito');

	}

}
