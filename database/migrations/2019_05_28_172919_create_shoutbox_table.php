<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShoutboxTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shoutbox', function(Blueprint $table)
		{
			$table->integer('id_shoutbox', true);
			$table->string('nama', 100);
			$table->string('website', 50);
			$table->text('pesan', 65535);
			$table->date('tanggal');
			$table->time('jam');
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
		Schema::drop('shoutbox');
	}

}
