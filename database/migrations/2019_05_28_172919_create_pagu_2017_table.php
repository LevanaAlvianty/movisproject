<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagu2017Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pagu_2017', function(Blueprint $table)
		{
			$table->integer('id_pagu');
			$table->string('tahun_anggaran', 4)->default('');
			$table->float('pagu', 10, 0)->nullable();
			$table->integer('id_jurbagnitpus')->default(0);
			$table->primary(['id_pagu','tahun_anggaran','id_jurbagnitpus']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pagu_2017');
	}

}
