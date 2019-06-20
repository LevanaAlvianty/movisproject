<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnggaran2017Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('anggaran_2017', function(Blueprint $table)
		{
			$table->integer('id_anggaran');
			$table->integer('id_kegiatan')->default(0);
			$table->float('a521211', 10, 0)->nullable();
			$table->float('a521213', 10, 0)->nullable();
			$table->float('a521219', 10, 0)->nullable();
			$table->float('a522141', 10, 0)->nullable();
			$table->float('a522151', 10, 0)->nullable();
			$table->float('a524114', 10, 0)->nullable();
			$table->float('a524119', 10, 0)->nullable();
			$table->float('a536111', 10, 0)->nullable();
			$table->float('a523111', 10, 0)->nullable();
			$table->dateTime('tglinput')->nullable();
			$table->dateTime('tgledit')->nullable();
			$table->float('a532111', 10, 0)->nullable();
			$table->float('total', 10, 0)->nullable();
			// $table->index(['id_kegiatan','id_anggaran'], 'idx_anggaran');
			$table->primary(['id_anggaran','id_kegiatan']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('anggaran_2017');
	}

}
