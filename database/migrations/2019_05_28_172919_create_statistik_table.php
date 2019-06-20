<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatistikTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('statistik', function(Blueprint $table)
		{
			$table->string('ip', 20)->default('');
			$table->date('tanggal');
			$table->integer('hits')->default(1);
			$table->string('online');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('statistik');
	}

}
