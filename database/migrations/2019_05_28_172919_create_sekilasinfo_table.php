<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSekilasinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sekilasinfo', function(Blueprint $table)
		{
			$table->integer('id_sekilas', true);
			$table->string('info', 100);
			$table->date('tgl_posting');
			$table->string('gambar', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sekilasinfo');
	}

}
