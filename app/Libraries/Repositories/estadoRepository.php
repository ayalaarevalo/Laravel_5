<?php

namespace App\Libraries\Repositories;


use App\Models\estado;

class estadoRepository
{

	/**
	 * Returns all estados
	 *
	 * @return \Illuminate\Database\Eloquent\Collection|static[]
	 */
	public function all()
	{
		return estado::all();
	}

	/**
	 * Stores estado into database
	 *
	 * @param array $input
	 *
	 * @return estado
	 */
	public function store($input)
	{
		return estado::create($input);
	}

	/**
	 * Find estado by given id
	 *
	 * @param int $id
	 *
	 * @return \Illuminate\Support\Collection|null|static|estado
	 */
	public function findestadoById($id)
	{
		return estado::find($id);
	}

	/**
	 * Updates estado into database
	 *
	 * @param estado $estado
	 * @param array $input
	 *
	 * @return estado
	 */
	public function update($estado, $input)
	{
		$estado->fill($input);
		$estado->save();

		return $estado;
	}
}