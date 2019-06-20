<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirkegiatanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dirkegiatan', function(Blueprint $table)
		{
			$table->integer('id_dirkegiatan', true);
			$table->string('dirkegiatan')->nullable();
			$table->string('keterangan', 191)->nullable();
			$table->string('tahun_penetapan', 4)->nullable();
			$table->enum('status', array('Y','N'))->nullable();
			$table->integer('id_renstra')->nullable();
			$table->integer('id_dirprogutama')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dirkegiatan');
	}

}
