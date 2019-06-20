<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMekanisme1Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mekanisme1', function(Blueprint $table)
		{
			$table->integer('id_mekanisme', true);
			$table->integer('id_kegiatan')->nullable();
			$table->text('mekanisme');
			$table->string('mtgl_mulai', 20)->nullable();
			$table->string('mtgl_selesai', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mekanisme1');
	}

}
