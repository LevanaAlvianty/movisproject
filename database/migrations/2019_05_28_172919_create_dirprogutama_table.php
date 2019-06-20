<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirprogutamaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dirprogutama', function(Blueprint $table)
		{
			$table->integer('id_dirprogutama', true);
			$table->string('dirprogutama',191)->nullable();
			$table->integer('id_renstra')->nullable();
			$table->string('tahun_penetapan', 11)->nullable();
			$table->enum('status', array('Y','N'))->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dirprogutama');
	}

}
