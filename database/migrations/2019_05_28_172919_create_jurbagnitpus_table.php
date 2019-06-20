<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJurbagnitpusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jurbagnitpus', function(Blueprint $table)
		{
			$table->integer('id_jurbagnitpus', true);
			$table->string('jurbagnitpus', 100)->nullable();
			$table->string('kode', 3)->nullable();
			$table->string('warna', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jurbagnitpus');
	}

}
