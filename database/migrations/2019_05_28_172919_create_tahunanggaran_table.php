<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTahunanggaranTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tahunanggaran', function(Blueprint $table)
		{
			$table->string('id_tahunanggaran', 4)->primary();
			$table->string('tahunanggaran', 4)->nullable();
			$table->string('aktif', 1)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tahunanggaran');
	}

}
