<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubmenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('submenu', function(Blueprint $table)
		{
			$table->integer('id_sub', true);
			$table->string('nama_sub', 50)->nullable();
			$table->string('link_sub', 100)->nullable();
			$table->integer('id_main');
			$table->integer('id_submain');
			$table->enum('aktif', array('Y','N'))->default('Y');
			$table->enum('adminsubmenu', array('Y','N'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('submenu');
	}

}
