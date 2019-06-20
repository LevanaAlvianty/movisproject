<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirkegiatan2018Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dirkegiatan_2018', function(Blueprint $table)
		{
			$table->integer('id_dirkegiatan');
			$table->string('dirkegiatan')->nullable();
			$table->string('keterangan', 191)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dirkegiatan_2018');
	}

}
