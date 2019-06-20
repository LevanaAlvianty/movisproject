<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRenstraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('renstra', function(Blueprint $table)
		{
			$table->integer('id_renstra', true);
			$table->string('renstra')->nullable();
			$table->string('tahun_penetapan', 4)->nullable();
			$table->enum('status', array('N','Y'))->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('renstra');
	}

}
