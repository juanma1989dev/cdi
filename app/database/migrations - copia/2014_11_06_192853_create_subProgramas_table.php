<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubProgramasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subProgramas', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre',60);
			$table->integer('programas_id');

			$table->primary('id');
			$table->foreign('programas_id')->references('id')->on('programas');

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
		Schema::drop('subProgramas');
	}

}
