<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMainmenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mainmenu', function(Blueprint $table)
		{
			$table->integer('id_main', true);
			$table->string('nama_menu', 50)->nullable();
			$table->string('link', 100)->nullable();
			$table->enum('aktif', array('Y','N'))->default('Y');
			$table->enum('adminmenu', array('Y','N'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mainmenu');
	}

}
