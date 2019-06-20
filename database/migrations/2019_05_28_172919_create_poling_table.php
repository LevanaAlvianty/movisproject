<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePolingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('poling', function(Blueprint $table)
		{
			$table->integer('id_poling', true);
			$table->string('pilihan', 100);
			$table->string('status', 20);
			$table->integer('rating')->default(0);
			$table->enum('aktif', array('Y','N'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('poling');
	}

}
