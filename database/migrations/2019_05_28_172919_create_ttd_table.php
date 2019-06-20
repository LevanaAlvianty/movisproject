<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTtdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ttd', function(Blueprint $table)
		{
			$table->integer('id_ttd', true);
			$table->integer('id_jurbagnitpus')->nullable();
			$table->string('nip', 25)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ttd');
	}

}
