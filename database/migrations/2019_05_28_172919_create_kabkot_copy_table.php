<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKabkotCopyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kabkot_copy', function(Blueprint $table)
		{
			$table->integer('id_prov');
			$table->integer('id_kabkot');
			$table->char('nama_kabkot', 40);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kabkot_copy');
	}

}
