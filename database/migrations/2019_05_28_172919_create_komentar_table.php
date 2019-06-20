<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKomentarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('komentar', function(Blueprint $table)
		{
			$table->integer('id_komentar', true);
			$table->integer('id_berita');
			$table->string('nama_komentar', 100);
			$table->string('url', 100);
			$table->text('isi_komentar', 65535);
			$table->date('tgl');
			$table->time('jam_komentar');
			$table->enum('aktif', array('Y','N'))->default('Y');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('komentar');
	}

}
