<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMekanismeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mekanisme', function(Blueprint $table)
		{
			$table->integer('id_mekanisme', true);
			$table->integer('id_kegiatan')->nullable();
			$table->text('mekanisme', 65535);
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
		Schema::drop('mekanisme');
	}

}
