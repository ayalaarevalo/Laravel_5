<?php namespace App\Http\Controllers;

use App\Departamento;
use App\Http\Requests;
use App\Http\Requests\DepartamentoRequest	;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;




class DepartamentosController extends Controller {

	public function __construct()
	{

		$this->middleware('auth', ['except' => 'index']);

	}
	

	public function index(Request $request)
	{


		$departamentos = Departamento::descripcion($request->get('descripcion'))->paginate(5);

		return View('departamentos.index',compact('departamentos'));
	}

	public function show(Departamento $departamento)
	{
		
		if(is_null($departamento)){

		}
		return View('departamentos.show',compact('departamento'));
	}

	public function create()
	{

		return View('departamentos.createUpdate');

	}

	public function store(DepartamentoRequest	 $request)
	{
		//Muestra todos los elementos que le envia el formulario
		//$input = Request::all();
		//Muestra solo el elemento de la tabla que quiero
		//$input = Request::get('nombre_campo_tabla');
		//$input['estado'] = 'A';
		//$input['delete_at'] = '0000-00-00 00:00:00';
		//Departamento::create($input);
		
		//Departamento::create(Request::all());

		Departamento::create($request->all());


		return redirect('departamentos')->with('message', 'Registro agregado con exito');
	}

	public function edit(Departamento $departamento)
	{

		if(is_null($departamento)){

		}

		return View('departamentos.createUpdate', compact('departamento'));

	}

	public function update(Departamento $departamento, DepartamentoRequest	 $request)
	{
		
		$departamento->update($request->all());
 
		return redirect('departamentos')->with('message', 'Registro actualizado con exito');

	}

	public function destroy($id)
	{

		$departamento = Departamento::find($id);

		$departamento->delete();

		return redirect('departamentos')->with('deleted', $id);

	}

	public function restore( $id )
   	{
       //Indicamos que la busqueda se haga en los registros eliminados con withTrashed
 
       $departamento = Departamento::withTrashed()->where('id', '=', $id)->first();
 
       //Restauramos el registro
       $departamento->restore();
 
       return redirect('departamentos')->with('restored' , $id );
   	}

}
