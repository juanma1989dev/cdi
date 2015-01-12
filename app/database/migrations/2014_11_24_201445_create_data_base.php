<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDataBase extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// t1
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
		// t2
		Schema::create('acciones', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 100);
			$table->timestamps();
			$table->primary('id');
		});
		// t3
		Schema::create('accionProgramada', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('inicioEjecucion');
			$table->date('finEjecucion');
			$table->integer('metaCNCH');
			$table->integer('metaCDI');
			$table->integer('mujeresBeneficiadas');
			$table->integer('hombresBeneficiados');

			$table->integer('acciones_id');

			$table->foreign('acciones_id')->references('id')->on('acciones');

			$table->timestamps();
		});
		//t4
		Schema::create('aspectos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('social');
			$table->text('economico');
			$table->text('politico');
			$table->timestamps();
		});
		//t5
		Schema::create('avanceAccion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('avanceCantidad');
			$table->integer('beneficiariosH');
			$table->integer('beneficiariosM');
			$table->timestamps();
		});
		//t6
		Schema::create('carencias', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 120);
			$table->timestamps();
			$table->primary('id');
		});
		//t7
		Schema::create('dependencias', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 120);
			$table->timestamps();
			$table->primary('id');
		});
		//t8
		Schema::create('distritosFederales', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 100);
			$table->timestamps();
			$table->primary('id');
		});
		//t9
		Schema::create('distritosLocales', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 120);
			$table->timestamps();
			$table->primary('id');
		});
		//t10
		Schema::create('estados', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 40);
			$table->timestamps();
			$table->primary('id');
		});
		//t11
		Schema::create('ubicaciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 120);
			$table->timestamps();
		});
		//t12
		Schema::create('programas', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 200);
			$table->timestamps();
			$table->primary('id');
		});
		//t13
		Schema::create('inversionEjercida', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('federalE', 15, 8);
			$table->double('estatalE', 15, 8);
			$table->double('municipalE', 15, 8);
			$table->double('otrosE', 15, 8);			
			$table->timestamps();
		});
		//t14
		Schema::create('inversionProgramada', function(Blueprint $table)
		{
			$table->increments('id');
			$table->double('federalP', 15, 8);
			$table->double('estatalP', 15, 8);
			$table->double('municipalP', 15, 8);
			$table->double('otrosP', 15, 8);			
			$table->timestamps();
		});
		//t15

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

			//$table->integer('proyectos_id')->unsigned();

			//$table->foreign('proyectos_id')->references('id')->on('proyectos');
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

			$table->integer('datosgenerales_id')->unsigned(); //revisar 


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

			$table->foreign('datosgenerales_id')->references('id')->on('datosgenerales'); //revisar

			

			$table->timestamps();
		});
		//t16
		Schema::create('imagenes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 100);

			$table->integer('proyectos_id')->unsigned();

			$table->foreign('proyectos_id')->references('id')->on('proyectos');

			$table->timestamps();
		});
		//t17
		Schema::create('lenguas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre', 30);
			$table->timestamps();
		});
		//t18
		Schema::create('localidades', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 120);
			$table->timestamps();
			$table->primary('id');
		});
		//t19
		Schema::create('microRegiones', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 80);
			$table->timestamps();
			$table->primary('id');
		});
		//t20
		Schema::create('municipios', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 120);
			$table->string('ccdi', 100); //checar
			$table->string('cnch', 100);
			$table->timestamps();
			$table->primary('id');
		});
		//t21
		Schema::create('regionesIndigenas', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 120);
			$table->timestamps();
			$table->primary('id');
		});
		//t22
		Schema::create('regionesOaxaca', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 80);
			$table->timestamps();
			$table->primary('id');
		});
		//t23
		Schema::create('subProgramas', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('nombre', 60);
			$table->integer('programas_id');

			$table->primary('id');
			$table->foreign('programas_id')->references('id')->on('programas');

			$table->timestamps();
		});
		//t24
		Schema::create('estado_municipio', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('estado_id')->index();
			$table->foreign('estado_id')->references('id')->on('estados')->onDelete('cascade');
			$table->integer('municipio_id')->index();
			$table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');
			$table->timestamps();
		});
		//t25
		Schema::create('localidade_municipio', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('localidade_id')->index();
			$table->foreign('localidade_id')->references('id')->on('localidades')->onDelete('cascade');
			$table->integer('municipio_id')->index();
			$table->foreign('municipio_id')->references('id')->on('municipios')->onDelete('cascade');
			$table->timestamps();
		});
		//t26
		
		//t27
		Schema::create('proyecto_estado_localidad_estado', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('proyectos_id')->unsigned();
			$table->integer('estados_id');
			$table->integer('municipios_id');
			$table->integer('localidades_id');

			$table->foreign('proyectos_id')->references('id')->on('proyectos');
			$table->foreign('estados_id')->references('id')->on('estados');
			$table->foreign('municipios_id')->references('id')->on('municipios');
			$table->foreign('localidades_id')->references('id')->on('localidades');

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
		
	}

}
