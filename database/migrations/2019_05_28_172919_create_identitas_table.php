<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIdentitasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('identitas', function(Blueprint $table)
		{
			$table->integer('id_identitas', true);
			$table->string('nama_website', 100);
			$table->string('alamat_website', 100);
			$table->string('meta_deskripsi', 250);
			$table->string('meta_keyword', 250);
			$table->string('favicon', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('identitas');
	}

}
