<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations. Ejecuta la migración
	 * se ha modificado para que el modelo User
	 * tenga más campos.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('apellidos');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('tipo');
			$table->string('mime')->nullable();
			$table->string('nombre_archivo_original')->nullable();
			$table->string('nombre_archivo')->nullable();
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations. Revierte la migración
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
