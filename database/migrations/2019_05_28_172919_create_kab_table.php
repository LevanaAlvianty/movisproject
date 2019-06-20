<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKabTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kab', function(Blueprint $table)
		{
			$table->string('idKab', 11)->nullable();
			$table->string('namaKabupaten', 50)->nullable();
			$table->string('idProp', 11)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kab');
	}

}
