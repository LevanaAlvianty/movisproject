<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDukungpkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dukungpk', function(Blueprint $table)
		{
			$table->integer('id_dukungpk', true);
			$table->integer('id_kegiatan')->nullable();
			$table->string('id_dirkegiatan', 200)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('dukungpk');
	}

}
