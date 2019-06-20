<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogKegiatanTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log_kegiatan', function(Blueprint $table)
		{
			$table->integer('id_log', true);
			$table->string('id_user', 100)->nullable();
			$table->integer('id_kegiatan')->nullable();
			$table->string('action', 11)->nullable();
			$table->dateTime('tgl_input')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('log_kegiatan');
	}

}
