<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHubungiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hubungi', function(Blueprint $table)
		{
			$table->integer('id_hubungi', true);
			$table->string('nama', 50);
			$table->string('email', 100);
			$table->string('subjek', 100);
			$table->text('pesan', 65535);
			$table->date('tanggal');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hubungi');
	}

}
