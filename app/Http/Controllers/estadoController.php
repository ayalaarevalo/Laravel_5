<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateestadoRequest;
use App\Libraries\Repositories\estadoRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;

class estadoController extends AppBaseController
{

	/** @var  estadoRepository */
	private $estadoRepository;

	function __construct(estadoRepository $estadoRepo)
	{
		$this->estadoRepository = $estadoRepo;
	}

	/**
	 * Display a listing of the estado.
	 *
	 * @return Response
	 */
	public function index()
	{
		$estados = $this->estadoRepository->all();

		return view('estados.index')->with('estados', $estados);
	}

	/**
	 * Show the form for creating a new estado.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('estados.create');
	}

	/**
	 * Store a newly created estado in storage.
	 *
	 * @param CreateestadoRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateestadoRequest $request)
	{
        $input = $request->all();

		$estado = $this->estadoRepository->store($input);

		Flash::message('estado saved successfully.');

		return redirect(route('estados.index'));
	}

	/**
	 * Display the specified estado.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$estado = $this->estadoRepository->findestadoById($id);

		if(empty($estado))
		{
			Flash::error('estado not found');
			return redirect(route('estados.index'));
		}

		return view('estados.show')->with('estado', $estado);
	}

	/**
	 * Show the form for editing the specified estado.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$estado = $this->estadoRepository->findestadoById($id);

		if(empty($estado))
		{
			Flash::error('estado not found');
			return redirect(route('estados.index'));
		}

		return view('estados.edit')->with('estado', $estado);
	}

	/**
	 * Update the specified estado in storage.
	 *
	 * @param  int    $id
	 * @param CreateestadoRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateestadoRequest $request)
	{
		$estado = $this->estadoRepository->findestadoById($id);

		if(empty($estado))
		{
			Flash::error('estado not found');
			return redirect(route('estados.index'));
		}

		$estado = $this->estadoRepository->update($estado, $request->all());

		Flash::message('estado updated successfully.');

		return redirect(route('estados.index'));
	}

	/**
	 * Remove the specified estado from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$estado = $this->estadoRepository->findestadoById($id);

		if(empty($estado))
		{
			Flash::error('estado not found');
			return redirect(route('estados.index'));
		}

		$estado->delete();

		Flash::message('estado deleted successfully.');

		return redirect(route('estados.index'));
	}

}
