<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProyectoEstadoLocalidadEstado extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('proyecto_estado_localidad_estado', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('proyectos_id')->unsigned();
			$table->interger('estados_id');
			$table->interger('municipios_id');
			$table->interger('localidades_id');

			$table->foreign('proyectos_id')->references('id')->on('proyectos');
			$table->foreign('estados')->references('id')->on('estados');
			$table->foreign('municipios')->references('id')->on('municipios');
			$table->foreign('localidades')->references('id')->on('localidades');

			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('proyecto_estado_localidad_estado');
	}

}
