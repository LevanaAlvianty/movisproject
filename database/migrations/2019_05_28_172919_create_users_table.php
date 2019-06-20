<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->unsignedInteger('role_id')->default(2);
			$table->string('username', true,50);
			$table->string('password', 191);
			$table->string('nama_lengkap', 191);
			$table->string('email', 191);
			$table->string('no_telp', 20);
			$table->string('level', 20)->default('user');
			$table->enum('blokir', array('Y','N'))->default('N');
			$table->string('id_session', 191);
			$table->integer('id_jurbagnitpus')->nullable();
			$table->string('reviewer', 50)->nullable();
			$table->string('reviewer_keu', 50)->nullable();
			// $table->primary(['id','username']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
