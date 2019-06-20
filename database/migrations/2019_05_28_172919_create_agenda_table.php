<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAgendaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agenda', function(Blueprint $table)
		{
			$table->integer('id_agenda', true);
			$table->string('tema', 100);
			$table->string('tema_seo', 100);
			$table->text('isi_agenda', 65535);
			$table->string('tempat', 100);
			$table->string('pengirim', 100);
			$table->date('tgl_mulai');
			$table->date('tgl_selesai');
			$table->date('tgl_posting');
			$table->string('jam', 50);
			$table->string('username', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agenda');
	}

}
