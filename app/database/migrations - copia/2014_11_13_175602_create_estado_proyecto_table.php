<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstadoProyectoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estado_proyecto', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('estado_id')->index();
			$table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
			$table->integer('proyecto_id')->unsigned()->index();
			$table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
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
		Schema::drop('estado_proyecto');
	}

}
