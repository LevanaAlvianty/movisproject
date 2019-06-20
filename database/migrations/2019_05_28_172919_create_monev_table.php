<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMonevTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('monev', function(Blueprint $table)
		{
			$table->integer('id_monev', true);
			$table->integer('id_kegiatan')->nullable();
			$table->integer('id_capaian')->nullable();
			$table->date('tgl_mulai')->nullable();
			$table->date('tgl_selesai')->nullable();
			$table->text('luaran', 65535)->nullable();
			$table->char('evaluasi_luaran', 12)->nullable();
			$table->char('laporan', 5)->nullable();
			$table->text('hasil_monev', 65535)->nullable();
			$table->dateTime('tgl_update')->nullable();
			$table->char('status_edit', 1)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('monev');
	}

}
