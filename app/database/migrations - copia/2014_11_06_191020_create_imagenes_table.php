<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImagenesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ubicaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->timestamps();
		});

		Schema::create('programas', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 200);
			$table->timestamps();
			$table->primary('id');
		});

		Schema::create('inversionEjercida', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('federal', 15, 8);
			$table->double('estatal', 15, 8);
			$table->double('municipal', 15, 8);
			$table->double('otros', 15, 8);			
			$table->timestamps();
		});

		Schema::create('inversionProgramada', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('federal', 15, 8);
			$table->double('estatal', 15, 8);
			$table->double('municipal', 15, 8);
			$table->double('otros', 15, 8);			
			$table->timestamps();
		});

		Schema::create('proyectos', function(Blueprint $table)
		{				
			$table->increments('id');
			$table->string('noExpediente', 15);
			$table->integer('avanceFisico');
			$table->integer('avanceFinaciero');
			$table->integer('noOficioSolicitud');
			$table->boolean('status');
			$table->string('ubicacion', 80);

			$table->integer('avanceaccion_id')->unsigned();
			$table->integer('accionprogramada_id')->unsigned();
			$table->integer('inversionprogramada_id')->unsigned();
			$table->integer('inversionejercida_id')->unsigned();
			$table->integer('aspectos_id')->unsigned();
			$table->integer('programas_id');
			$table->integer('ubicaciones_id')->unsigned();
			$table->integer('carencias_id');
			$table->integer('dependencias_id');
			$table->integer('users_id')->unsigned();


			$table->foreign('avanceaccion_id')->references('id')->on('avanceaccion');
			$table->foreign('accionprogramada_id')->references('id')->on('accionprogramada');
			$table->foreign('inversionProgramada_id')->references('id')->on('inversionprogramada');
			$table->foreign('inversionejercida_id')->references('id')->on('inversionejercida');
			$table->foreign('aspectos_id')->references('id')->on('aspectos');
			$table->foreign('programas_id')->references('id')->on('programas');
			$table->foreign('ubicaciones_id')->references('id')->on('ubicaciones');
			$table->foreign('carencias_id')->references('id')->on('carencias');
			$table->foreign('dependencias_id')->references('id')->on('dependencias');
			$table->foreign('users_id')->references('id')->on('users');
			

			$table->timestamps();
		});

		Schema::create('imagenes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 100);

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
		Schema::drop('imagenes');
	}

}
