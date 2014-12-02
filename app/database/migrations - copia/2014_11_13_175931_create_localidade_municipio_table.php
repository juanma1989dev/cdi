<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalidadeMunicipioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('localidade_municipio', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('localidade_id')->index();
			$table->foreign('localidade_id')->references('id')->on('localidades')->onDelete('cascade');
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
		Schema::drop('localidade_municipio');
	}

}
