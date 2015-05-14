<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('documentos', function(Blueprint $table)
		{
			//
			$table->increments('id');			
			$table->integer('tipo_documento_id')->unsigned();
			$table->integer('departamento_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->string('numeracion',25);
			$table->date('fecha_documento');
			$table->string('asunto',300);
			$table->string('archivo',255);
			$table->timestamps();
			$table->softDeletes();	
			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('restrict');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('documentos');
	}

}
