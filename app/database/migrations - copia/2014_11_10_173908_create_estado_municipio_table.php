<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEstadoMunicipioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estado_municipio', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('estado_id')->index();
			$table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
			$table->integer('municipio_id')->index();
			$table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');
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
		Schema::drop('estado_municipio');
	}

}
