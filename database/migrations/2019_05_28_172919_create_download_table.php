<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDownloadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('download', function(Blueprint $table)
		{
			$table->integer('id_download', true);
			$table->string('judul', 100);
			$table->string('nama_file', 100);
			$table->date('tgl_posting');
			$table->integer('hits');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('download');
	}

}
