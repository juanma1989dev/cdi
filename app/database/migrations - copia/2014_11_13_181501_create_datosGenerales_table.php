<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDatosGeneralesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('datosGenerales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombreBeneficiario', 150);
			$table->string('rfc', 20);
			$table->string('curp', 20);
			$table->string('correo', 100);
			$table->integer('telefono');
			$table->integer('celular');
			$table->boolean('viable');
			$table->text('descripcion');
			$table->string('evento', 100);
			$table->date('fechaEvento');
			$table->string('lugarEvento', 100);

			$table->integer('proyectos_id')->unsigned();

			$table->foreign('proyectos_id')->references('id')->on('proyectos');
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
		Schema::drop('datosGenerales');
	}

}
