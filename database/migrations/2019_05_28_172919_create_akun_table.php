<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAkunTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('akun', function(Blueprint $table)
		{
			$table->integer('id_akun', true);
			$table->string('akun', 20)->nullable();
			$table->string('nama_akun', 100)->nullable();
			$table->string('ket_akun', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('akun');
	}

}
