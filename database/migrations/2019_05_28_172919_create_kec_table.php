<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKecTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kec', function(Blueprint $table)
		{
			$table->integer('id_prov');
			$table->integer('id_kabkot');
			$table->integer('id_kec');
			$table->char('nama_kec', 40);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kec');
	}

}
