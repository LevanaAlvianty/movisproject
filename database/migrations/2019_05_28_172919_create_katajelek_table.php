<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKatajelekTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('katajelek', function(Blueprint $table)
		{
			$table->integer('id_jelek', true);
			$table->string('kata', 60)->nullable();
			$table->string('ganti', 60)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('katajelek');
	}

}
