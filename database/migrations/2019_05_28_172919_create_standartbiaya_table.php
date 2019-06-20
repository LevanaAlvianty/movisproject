<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStandartbiayaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('standartbiaya', function(Blueprint $table)
		{
			$table->integer('id_standartbiaya', true);
			$table->string('namabarang', 191)->nullable()->index('item_idx');
			$table->float('hargasatuan', 10, 0)->nullable();
			$table->string('acuan', 191)->nullable();
			$table->string('id_satuan', 50)->nullable();
			$table->integer('id_akun')->nullable();
			$table->integer('id_kelompok')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('standartbiaya');
	}

}
