<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombres', 80);
			$table->string('apellidoM', 30);
			$table->string('apellidoP', 30);
			$table->string('usuario', 50)->unique();
			$table->string('contrasenia', 120);
			$table->enum('nivel', ['administrador', 'capturista', 'superUsuario', 'cordinador']);
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
		Schema::drop('User');
	}

}
