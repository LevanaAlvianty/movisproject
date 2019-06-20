<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAkun521211Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('akun521211', function(Blueprint $table)
		{
			$table->integer('id_akun521211')->primary();
			$table->integer('id_kegiatan')->nullable();
			$table->integer('id_satuanbiaya')->nullable();
			$table->string('namabarang')->nullable();
			$table->integer('id_satuan')->nullable();
			$table->float('hargasatuan', 10, 0)->nullable();
			$table->integer('qty')->nullable();
			$table->integer('freq')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('akun521211');
	}

}
