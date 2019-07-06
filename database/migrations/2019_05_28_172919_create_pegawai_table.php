<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePegawaiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pegawai', function(Blueprint $table)
		{
			$table->integer('id_pegawai', true);
			$table->string('nip', 25)->nullable();
			$table->string('nama', 150)->nullable();
			$table->string('golongan', 7)->nullable();
			$table->string('jabatan', 150)->nullable();
			$table->string('password', 191);
			$table->string('email')->unique();
            $table->string('username')->default('User');
			$table->string('image')->default('default.png');
			$table->rememberToken();
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
		Schema::drop('pegawai');
	}

}
