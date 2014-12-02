<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAccionProgramadaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('acciones', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 100);
			$table->timestamps();
			$table->primary('id');
		});


		Schema::create('accionProgramada', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('inicioEjeucion');
			$table->date('finEjeucion');
			$table->integer('metaCNCH');
			$table->integer('metaCDI');
			$table->integer('mujeresBeneficiadas');
			$table->integer('hombresBeneficiados');

			$table->integer('acciones_id');

			$table->foreign('acciones_id')->references('id')->on('acciones');

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
		Schema::drop('accionProgramada');
	}

}
