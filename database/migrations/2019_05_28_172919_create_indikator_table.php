<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIndikatorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('indikator', function(Blueprint $table)
		{
			$table->integer('id_indikator', true);
			$table->integer('id_kegiatan')->nullable();
			$table->string('indikator', 200)->nullable();
			$table->string('baseline', 200)->nullable();
			$table->string('target', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('indikator');
	}

}
