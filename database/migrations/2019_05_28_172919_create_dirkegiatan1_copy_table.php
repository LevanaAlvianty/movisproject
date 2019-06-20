<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDirkegiatan1CopyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dirkegiatan1_copy', function(Blueprint $table)
		{
			$table->string('id_dirkegiatan', 11)->primary();
			$table->mediumText('dirkegiatan')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dirkegiatan1_copy');
	}

}
