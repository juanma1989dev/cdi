<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAvanceAccionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('avanceAccion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('cantidad');
			$table->integer('beneficiariosH');
			$table->integer('beneficiariosM');
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
		Schema::drop('avanceAccion');
	}

}
